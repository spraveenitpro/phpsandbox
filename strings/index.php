<?php 

/*$name = "joe";
$age  = 27;
//$greeting = "My Name is $name and I am ";
$greeting = sprintf("My Name is %s and my age is %d",$name, $age);
echo $greeting;*/


/*printf("Today is %s %s %d", 'June', '7th', '2012');*/

sscanf("June 7th, 2012 ", "%s %[^,], %d", $month, $day, $year);


/*print_r($results);*/
echo $month;echo $day;;echo $year;


?>