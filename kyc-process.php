<?php
if (isset($_POST['username'])) {

    // SENDTO EMAIL
    $email_to = "";
    $email_subject = "New KYC Form Submission";

    // validation expected data exists
    if (
        !isset($_POST['name'])
    ) {
        $_SESSION['error'] = 'We are sorry, but there appears to be a problem with the form you submitted.';
    }

    $name = $_POST['name']; // required
    $username = $_POST['username']; // required
    $profession = $_POST['profession']; // required
    $networth = $_POST['networth']; // required
    $prev_validid = $_FILES['validid']['name'];
    $prev_bankstatement = $_FILES['bankstatement']['name'];

    // if message is empty
    if (
        empty($_POST['message'])
    ) {
        $message = 'There appears to be no additional message';
    }else{
        $message = $_POST['message']; // optional
    }
    

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $_SESSION['error'] = 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $_SESSION['error'] = 'The Message you entered does not appear to be valid.<br>';
    }

    if(!empty($prev_validid)){
        $ext = pathinfo($prev_validid, PATHINFO_EXTENSION);
        $validid = $username.'validid.'.$ext;
        move_uploaded_file($_FILES['validid']['tmp_name'], 'uploads/'.$validid);
    }

    if(!empty($prev_bankstatement)){
        $ext = pathinfo($prev_bankstatement, PATHINFO_EXTENSION);
        $bankstatement = $username.'bankstatement.'.$ext;
        move_uploaded_file($_FILES['bankstatement']['tmp_name'], 'uploads/'.$bankstatement);
    }

    $email_message = "KYC Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Username: " . clean_string($username) . "\n";
    $email_message .= "Profession: " . clean_string($profession) . "\n";
    $email_message .= "Net Worth: " . clean_string($networth) . "\n";
    $email_message .= "Valid ID File:  https://startacap.com/kyc/uploads/".$validid."\n";
    $email_message .= "Bank Statement File:  https://startacap.com/kyc/uploads/".$bankstatement."\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: starta@startacap.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

    $_SESSION['success'] = 'Your KYC request has been submitted successfully ! To continue to navigate site, <a href="www.startacap.com">Click Here</a>';
    header('location: ' . $_SERVER['HTTP_REFERER']);
}
?>
