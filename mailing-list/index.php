<?php 

require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	// echo $name."  ".$email;die();
	if (empty($name) || empty($email)  || !valid_email($email)) {
		$status = 'Please enter value';
	}
	else {
		add_registered_user($name, $email);
		$status ='Thank you for registering your email has been registered';
	}
}
include 'index.tmpl.php';
?>