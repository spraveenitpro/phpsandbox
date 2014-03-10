<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>People on Mailing list</h1>

<?php 

	if( $registered_users) {

		foreach($registered_users as $user) {

		 list($name, $email) = $user;
		 echo "<li>$name: <a href='mailto:$email'>$email</a></li>";
		}
	}else {

		echo "No Registered Users";
	}


?>

 


</body>
</html>