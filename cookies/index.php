<?php 

/*setcookie('fontSize', 25, time() - 60 * 30, '/' );

echo $_COOKIE['fontSize'];*/

setcookie('prefs[fontSize]', 25);
setcookie('prefs[favoriteCategory]','news');
setcookie('prefs[screenWidth]', 1024);



?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>

	body {
		font-size: <?= $_COOKIE['fontSize'];   ?>
	}

	</style>
	<title>Document</title>
</head>
<body>

	<?php 

		if (isset($_COOKIE['prefs'])) {

		foreach ($_COOKIE['prefs'] as $key => $value) {

			echo '<li>'.htmlspecialchars($key).":".htmlspecialchars($value);
		}
	}


	 ?>
</body>
</html>