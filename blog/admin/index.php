<?php 

require '../blog.php';
$data = array();


if ( $_SERVER['REQUEST_METHOD'] === 'POST') 
{
	$title = $_POST['title'];
	$body = $_POST['body'];

	if ( empty($title) || empty($body) ) {

		$data['status'] = 'Fill in both fields';
	}
	else {
		//Create a New row in table
		Blog\DB\query(
			"INSERT INTO posts (title, body) VALUES (:title, :body)", 
			 array('title' => $title, 'body' => $body), $conn) ;
		$data['status'] = 'Row has been successfully inserted';
	}


}  

view('admin/create', $data);


?>