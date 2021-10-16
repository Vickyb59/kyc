<?php
if (isset($_POST['username'])) {

    // SENDTO EMAIL
    $email_to = "israelcharlse@gmail.com";
    $email_subject = "New KYC Form Submission";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['name'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name']; // required
    $username = $_POST['username']; // required
    $profession = $_POST['profession']; // required
    $networth = $_POST['networth']; // required

    // if message is empty
    if (
        empty($_POST['message'])
    ) {
        $message = 'There appears to be no additional message';
    }else{
        $message = $_POST['message']; // optional
    }
    

    $error_message = "";

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered does not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
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
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: starta@startacap.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    Thank you for filling this. We will be in touch with you very soon.

<?php
}
?>