<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	.container {
		width: 600px;
		margin: auto;
		}
		form li {
			list-style: none;
		}
		form ul {
			padding: 0;
		}
		form input[type="text"], form textarea {
			margin-bottom: 1.5em;
			width: 100%;
		}
		form textarea {
			width: 100%;
			height: 300px;
		}
		label {
			display: block;
		}

	</style>
</head>
<body>
	<div class="container">
		<?php include($path); ?>
	</div>
	
</body>
</html>