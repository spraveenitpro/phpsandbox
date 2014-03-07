
<?php 
include 'functions.php';
session_start(); 


if (!is_logged_in()) {
	header('location: login.php');
	die();

}



?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
	<a href="logout.php">Logout</a>
	
</body>
</html>