
<?php 

include 'config.php';
include 'functions.php';
session_start();
 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$username = $_POST['name'];
	$password = $_POST['password'];

	if (validate_user_creds($username, $password)) {

		$_SESSION['username'] = $username;
		header("Location: admin.php");
	}
	else {

		$status = "Incorrect Credentials";
	}
	

}

 
/*************************************************************/
/* Validate Passwords */
/*************************************************************/





/*if (isset($_POST['loginform'])) {

	echo "The Form has been posted !";
}*/


?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Login</h1>
	<form action="login.php" method="post">
		
		<li>
			<label for="name">User Name</label>
			<input type="text" name="name">
		</li>

		<li>
			<label for="password">Password</label>
			<input type="password" name="password">
		</li>

		<li>
			 
			<input type="submit" value="Login" name ="loginform">
		</li>

		<?php  if (isset($status)) : ?>
		<p><?php echo $status; ?></p>
		<?php endif; ?>


	</form>

	
</body>
</html>