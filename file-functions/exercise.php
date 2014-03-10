<?php 
/*Given the file path, images/my-file.txt, show me three different 
ways to specifically capture the string, my-file, and 
store it in a variable, $filename
*/

 
 


$file_path = 'images/my-file.txt';

#1
/*$file_name = pathinfo($file_path, PATHINFO_FILENAME);
echo $file_name;*/

#2

/*$file_name = basename($file_path,'.txt');
echo $file_name;*/
 
#3
$file_name = substr(explode('/',$file_path)[1],0, -4);
echo $file_name;


 ?>