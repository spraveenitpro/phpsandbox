


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Super Globals</h1>
	<?php var_dump($_GET) ?>

	<?php 
		// echo htmlspecialchars("<code>hello world</code>");
		if( isset($_GET['id'])){
			echo htmlspecialchars($_GET['id']); }
		else {
			echo "Not set";
		}
	?>
	<!-- <?php echo $_GET['job']; ?> -->

	<a href="about.php?id=<?php echo htmlspecialchars($_GET['id']); ?>">About</a>
	
</body>
</html>