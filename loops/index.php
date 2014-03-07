<?php 

$arr = ['Jeff', 'Collis', 'Tash', 'Praveen', 'Steve'];

/*foreach ($arr as $name) {

echo $name."\n";

}*/

/*$arr = array(
	'ceo' => 'Collis',
	'manager' => 'Tash',
	'instructor' => 'Praveen'
	);
*/
/*foreach( $arr as $title => $name) {
	echo " <li> ".$title."  "." is ".$name."</li>";


}
*/

/*for ($i = 0;$i < count($arr); $i++) {


	echo "<li>".$arr[$i]."</li>";
}*/

$i = 0;
while ($i < 4) {

	echo $arr[$i];
	$i++;
}



?>