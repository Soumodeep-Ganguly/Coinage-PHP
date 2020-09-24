<?php
	session_start();
	$name=$_SESSION['reg_id'];
	session_unset();
	header('Location: ../../login.php');
?>