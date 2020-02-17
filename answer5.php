<?php

/*
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array. Go to the editor
Expected result : white
*/

$color = [4 => 'white', 6 => 'green', 11=> 'red'];
$firstValue = reset($color); // reset() resets the pointer of the array to the first value
echo $firstValue;
