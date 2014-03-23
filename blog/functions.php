<?php 

function view($path, $data = null)
{
	if ($data) {
		extract($data);
	}
	$path = $path . '.view.php';
	include "views/layout.php";
	
	
}

// //Filter through and display the Page in the view
// $view_path = 'views/index.view.php';
// include 'views/layout.php';


?>