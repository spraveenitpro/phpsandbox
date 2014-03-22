

<?php

require 'functions.php';
require 'db.php';
 

// Connect to DB
$conn = Blog\DB\connect($config);
if (!$conn) die ('Problem connecting to DB');