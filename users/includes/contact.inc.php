<?php

if (isset($_POST['submit'])) {

$name = $_POST['name'];
$email_subject = "New Contact Us Message";
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$mailTo = 'coinage.web@gmail.com';
$headers = "From: ".$visitor_email;


$email_body = "User Name: ".$name.".\n\n User Email: ".$visitor_email.".\n User Message: ".$message.".\n";


mail($mailTo, $email_subject, $email_body, $headers);

header("Location: ../contact.php?message_send=done");

}

?>