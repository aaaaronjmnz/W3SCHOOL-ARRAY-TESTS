<?php

/*
Write a PHP script that inserts a new item in an array in any position.
Expected Output :
Original array :
1 2 3 4 5
After inserting '$' the array is :
1 2 3 $ 4 5
*/

class answer7 {

	public $numbers;

	public function __construct($numbers)
	{
		$this->numbers = $numbers;
	}

	public function originalArray()
	{
		foreach ($this->numbers as $number)
		{
			echo $number . ' ';
		}
	}

	public function insertRandomlyThenEcho($insert)
	{
		$arrayCount = count($this->numbers);
		$randomPlacer = rand(0, $arrayCount);
		array_splice($this->numbers, $randomPlacer, 0, $insert);
		foreach ($this->numbers as $number)
		{
			echo $number . ' ';
		}
	}
}

$firstSet = new answer7([1, 2, 3, 4, 5, 6, 7]);
echo 'Orinal Array:' . '<br />';
$firstSet->originalArray();

echo '<br /><br />' . 'After inserting \'x\', the array is' . '<br />';
$firstSet->insertRandomlyThenEcho('x');

echo '<br /><br />' . 'Spam F5 to see random insert.';

/* COMMENT: Nung natapos ko yung code ko tapos chineck ko if tama sa W3resource, medyo iba pala solution nya. Insert array in any position sakanya pero ikaw pa din mag iindicate kung saan. Yung sakin program that inserts an element in an array in any random position. */
