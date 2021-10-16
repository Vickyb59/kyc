<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['name'])){
        $name = $_POST['name']; // required
        $username = $_POST['username']; // required
        $profession = $_POST['profession']; // required
        $networth = $_POST['networth']; // required

        // if message is empty
        if (
            empty($_POST['message'])
        ) {
            $client_message = 'There appears to be no additional message';
        }else{
            $client_message = $_POST['message']; // optional
        }
        

                    $message = "
                        <h2>KYC Form Submission</h2>
                        <p><b>Name:</b> ".$name."</p>
                        <p><b>Username:</b> ".$username."</p>
                        <p><b>Profession:</b> ".$profession."</p>
                        <p><b>Net Worth:</b> ".$networth."</p>
                        <p><b>Message:</b><br/>".$client_message."</p>
                    ";


                    //Load phpmailer
                    require 'vendor/autoload.php';

                    $mail = new PHPMailer(true);                             
                    try {
                        //Server settings

                        $mail->IsSMTP();        //Sets Mailer to send message using SMTP
                        $mail->Host = 'www.startacap.com';  //Sets the SMTP hosts
                        $mail->Port = '465';        //Sets the default SMTP server port
                        $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
                        $mail->Username = 'noreply@startacap.com';     //Sets SMTP username
                        $mail->Password = 'Star@001-';     //Sets SMTP password
                        $mail->SMTPSecure = 'ssl';       //Sets connection prefix. Options are "", "ssl" or "tls"
                        $mail->From = 'noreply@startacap.com';     //Sets the From email address for the message
                        $mail->FromName = 'Starta KYC';    //Sets the From name of the message
                        $mail->AddAddress('israelcharlse@gmail.com');//Adds a "To" address

                        $mail->IsHTML(true);       //Sets message type to HTML   

                        $mail->Subject = "Starta KYC Submission";  
                        $mail->Body = $message;

                        $mail->send();

                        $_SESSION['success'] = 'Your KYC request has been submitted successfully ! To continue to navigate site, <a href="www.startacap.com">Click Here</a>';
                        header('location: index.php');

                    } 
                    catch (Exception $e) {
                        $_SESSION['success'] = 'Your KYC request submission failed, please try again.';
                        header('location: index.php');
                    }


                    $_SESSION['success'] = $e->getMessage();
                    header('location: index.php');

            

        

    }
    else{
        $_SESSION['error'] = 'Fill up KYC form first';
        header('location: index.php');
    }

?>