<?php 

require 'functions.php';
use Blog\DB;

$conn = DB\connect($config);

if ( $conn ) {
	$users = DB\get('users', $conn); 
} else die('Could Not Connect');
	

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDO</title>
</head>
<body>
	<?php 

		if ($users) {
			foreach ($users as $user) {
				// print_r($user);
				echo "<li>". $user['username']  ."</li>";
			}		
		} else {
			echo "No Rows Returned";
		}
	 ?>
</body>
</html>


 

  