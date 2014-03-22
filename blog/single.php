<?php 



require 'blog.php';
use Blog\DB;

$post = DB\get_by_id((int)$_GET['id'], $conn);


if ( $post ) {
	$post = $post[0];
	//Filter through and display the Page in the view
	$view_path = 'views/single.view.php';
	include 'views/layout.php';
}
else {
	header ('location:index.php');
}

