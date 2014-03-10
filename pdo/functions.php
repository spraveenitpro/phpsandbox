<?php 

 
/*************************************************************/
/* PDO  */
/*************************************************************/

require 'config.php';

$letter= 'J%'; //Temporary

try{
	$conn = new PDO('mysql:host=localhost;dbname=practice', $config['DB_USERNAME'], $config['DB_PASSWORD'] );
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$stmt =  $conn->prepare('INSERT into users(username) values (:username)');
	// $stmt->setFetchMode(PDO::FETCH_OBJ);
	// $stmt =  $conn->prepare('SELECT * FROM users WHERE username LIKE "_a%"');

	// $stmt->execute(array(
	// 	'letter' => $letter . '%'
	// 	));
	// $stmt->bindParam(':letter', $letter, PDO::PARAM_STR);
	// $stmt->execute();
	// 
	$stmt->bindParam('username',$username, PDO::PARAM_STR);

	$users = array('Kumar', 'Peter', 'Bob');

	foreach($users as $username) {

		$stmt->execute();
	}



	// $username = 'AmyDoe';
	// $stmt->execute();

	// $username = 'BobbyDoe';
	// $stmt->execute();

	// $username = 'ClifDoe';
	// $stmt->execute();

	// $result = $stmt->fetchAll();
	// print_r($result);

	// while($row = $stmt->fetch()) {

	// 	print_r($row);
	// }
 	
}  catch ( PDOException $e) {

	echo 'Error: '.$e->getMessage();
}

?>