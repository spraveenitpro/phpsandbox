<?php 

require 'functions.php';



$id = isset($_GET['id']) ? (int)($_GET['id']) : 1;
$conn = connect($config);
if ( $conn ) {
	$row = query("select * from users where id = :id", 
					array('id' => $id),
					$conn)[0];
} 
else {

	echo "Could Not Connect";
}
 ?>





<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	 <?php if ( $row ) : ?>

	 <h1><?= $row['username'] ;?>'s Profile</h1>	

	<?php else: ?>

	 <h1>No User!</h1>	

	 <?php endif; ?>
	
</body>
</html>