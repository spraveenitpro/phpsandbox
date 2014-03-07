<?php 



/*function set_count($file_name = 'counter.txt') {

		if (file_exists($file_name)) {

			//Read the value
			$handle = fopen($file_name, 'r');
			$count = (int)fread($handle, 20) + 1;
			$handle = fopen($file_name,'w'); 
			fwrite($handle, $count); 
			fclose($handle);

		}else {

			//create file 
			$handle = fopen($file_name, 'w+');
			$count = 1;
			//Set default of 1
			fwrite($handle, $count);
			fclose($handle);
		}
	return $count;
}*/


function set_count($file_name = 'counter.txt') {

		if (file_exists($file_name)) {
			//Read the value
			$count = (int) file_get_contents($file_name) + 1;
			file_put_contents($file_name, $count); 

		}else {

			//create file 
			$handle = fopen($file_name, 'w+');
			$count = 1;
			//Set default of 1
			fwrite($handle, $count);
			fclose($handle);
		}
	return $count;
}





$count = set_count();
require('index.tmpl.php');
?>