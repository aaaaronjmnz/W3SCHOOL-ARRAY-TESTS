<?php

/*
Write a PHP script which decodes the following JSON string. Go to the editor
Sample JSON code :
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
*/

$jsonCode = '[{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}]';

// print_r(json_decode($jsonCode, true));

$bookInformation = json_decode($jsonCode, true); //converts the JSON string to an array. It's important to add 'true' in the parameters otherwise it only converts it into an object.

// die(var_dump($bookInformation));

function secondSet($information, $category) //the parameters are set in reversed order ($value, $key).
{
	echo "{$category} : {$information}" . '<br />';
}

array_walk_recursive($bookInformation, "secondSet"); //array_walk_recursive allows you to perform a function for each set of array even if it's a mulidimensional array
