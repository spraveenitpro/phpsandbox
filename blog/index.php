<?php 

require 'blog.php';
use Blog\DB;



//Fetch all the posts
$posts = DB\get('posts', $conn);

//Filter through and display the Page in the view
$view_path = 'views/index.view.php';
include 'views/layout.php';


