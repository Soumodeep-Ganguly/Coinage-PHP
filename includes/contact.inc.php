<?php

include "connection.php";

if (isset($_POST['submit'])) {

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email_subject = "New Contact Us Message";
	$visitor_email = mysqli_real_escape_string($conn, $_POST['email']);
	$message = mysqli_real_escape_string($conn, $_POST['message']);

	require '../phpmailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username='coinage.web@gmail.com';
	$mail->Password='1st-COINAGE';

	$mail->setFrom($visitor_email,$name);
	$mail->addAddress('soumodeep.ganguly.007@gmail.com');
	$mail->addReplyTo($visitor_email,$name);
	$mail->isHTML(true);
	$mail->Subject='Form Submission: '.$message;
	$mail->Body='<h1 align=center>Name: '.$name.'</h1><br/>Email: '.$visitor_email.'<br/>Message: '.$message;
	if (!$mail->send()) {
		$result="Something went wrong";
	}else{
		$result="Thanks ".$name." for contacting us.";
	}

header("Location: ../contact.php?message_send=done");


}

?>