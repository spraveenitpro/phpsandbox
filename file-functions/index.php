<?php 

$images = glob('img/*.{png,jpg,jpeg}', GLOB_BRACE);

foreach($images as $img) {

	// echo dirname($img)." = " .basename($img) ;
	// echo substr($img, -3);
	// $info = pathinfo($img);
	// echo $info['filename'];
	// extract(pathinfo($img));
	// echo $extension."  ".$filename."\n";
	// echo "\n";
	// echo pathinfo($img, PATHINFO_FILENAME);
	// echo "<br>";
	//$info = pathinfo($img);
	extract(pathinfo($img));
	//$thumb_name = $info['filename'].'-thumb.'.$info['extension'];
	$thumb_name = "thumb-{$filename}.{$extension}";
	echo $thumb_name."</br>";
}


?>