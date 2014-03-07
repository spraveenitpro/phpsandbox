<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	setcookie('fontSize', (int) $_POST['font-size'], time() + 60 * 60);
	header('Location: font.php');
}

/*if (isset ($_POST['font-size'])) {

	$font_size = $_POST['font-size'];

} else if( isset( $_COOKIE['fontSize'])) {

	$font_size = $_COOKIE['fontSize'];
} else {

	$font_size =16;
}*/

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<style>

		li {

			list-style: none;
		}

		ul, li {

			margin: 0;padding: 0;
		}

		body {

			font-size: <?= $_COOKIE['fontSize'] . 'px;' ?>
		}


	</style>
	<title>Document</title>
	
</head>
<body>

<form action="" method = "post">
	
	<label for="font-size">Your Preferred Font Size</label>
	<select name="font-size" id="font-size">
		
		<option value="10">10</option>
		<option value="20">20</option>
		<option value="30">30</option>
		<option value="50">50</option>

	</select>
	<input type="submit" name="submitfont" value="submit">


</form>

<h3>This is cool</h3>

<p>Hello , how are you  !!!

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

</p>
	
</body>
</html>