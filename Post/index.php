<?php 
  
  // if ( !empty($_POST)) {

  // 	 print_r($_POST);
  // 	 echo $_SERVER['REQUEST_METHOD'];
  // }

/*	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(mail('spraveenitpro@yahoo.com', "Hello from the Interwebs", $_POST['message'])) {
 			$status = "Thank you for the message";
		}
		
		
	}*/
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form li {
			list-style: none;
			margin-bottom: 1em;
		}

		form ul {
			margin: 0;
			padding:0;
		}



	</style>
</head>
<body>
	 
	<form action="http://api.formspree.com/e1529336@drdrb.com" method="post">
	<ul>
		<li>
			
			<label for="name">Name</label>
			<input type="text" name="name">

		</li>
		<li>
			<label for="email">Email</label>
			<input type="text" name="email" id="email">
		</li>

		<li>
			<label for="message">Your Message</label><br>
			<textarea name="message" id="message"></textarea>
		</li>

		<li>
			<label for="submit">Submit</label>
			<input type="submit" name="submit">
		</li>
	</ul>


	</form>

	<?php if(isset($status)) echo $status; ?>
	
</body>
</html>