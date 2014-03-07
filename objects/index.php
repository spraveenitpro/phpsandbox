<?php 

/*$person = array(
	'first' => 'John',
	'last'	=> 'Doe',
	'Job'	=> 'Developer'
);

var_dump($person);*/

/*class Person {

	public $name;
	public $job;


	public function __contruct($name, $job)
	{
		$this->name = $name;
		$this->job = $job;

	}

	public function communicate($style = 'voice') 
	{
		return 'communicating with '.$style;
	}
}


$p = new Person('John', 'Teacher');

echo $p->communicate('telepathy');*/



/*$person = new stdClass;
$person->first = 'John';
$person->last = "Doe";
$person->job = "Teacher";*/

$person = array(
	'first' => 'John',
	'last' 	=> 'Doe'
	);

/*var_dump($person);*/


 
$o = (object)$person;

echo $o->first;
echo $o->last;
print_r($o);

/*echo gettype('5');*/














?>


