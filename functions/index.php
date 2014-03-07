<?php 


/*function say_hello($name) {
	return "Hi, There $name !";
}


echo say_hello("Praveen");

*/


/*$arr = array('name' => 'Joe', 'age' => 40, 'occupation' => 'teacher');



function pp($value) {
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}

pp($arr);
*/


/*echo "<pre>";
print_r($arr);
echo "</pre>";*/

/*function array_pluck($topluck,$value) {
	$ret = array();

	foreach($value as $item) {

		$ret[] = $item[$topluck];
	}

	return $ret;

}
*/

function array_pluck($topluck,$arr) {
	return array_map(function($item) use($topluck) { 
	return $item[$topluck];	 
	}, $arr); 
}



$people = array(
	array('name' => 'Jeff', 'age' => 27, 'occupation' => 'Web Developer'),
	array('name' => 'Steve', 'age' => 37, 'occupation' => 'Web Designer'),
	array('name' => 'Clinton', 'age' => 21, 'occupation' => 'Graphic Designer')
	);

$names = array_pluck('occupation', $people);

foreach ($names as $name) {

	echo $value;
}

/*$yourvalue = array_pluck('age', $people);

print_r  ($yourvalue);
*/


?>