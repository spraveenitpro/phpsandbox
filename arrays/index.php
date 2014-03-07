
<?php 

//$month = array('january', 'february' ,'march');
//var_dump($month);
//echo $month[1];

//print_r($month);

$tuts_sites = array(
		'nettuts' => 'http://googe.com',
		'psdtuts' => 'http://tutsplus.com',
		'codetuts' => 'http://tth.com',
		'creafttuts' => 'http://tutsplus.com',
	);
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    <h1>Tuts sites</h1>

    <ul>
        <?php foreach($tuts_sites as $name => $url) {

                echo "<li><a href=\"$url\">".ucwords($name)."</li>";

                


        } ?>
    </ul>
    
</body>
</html>