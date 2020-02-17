<?php

/*
Write a PHP script to sort the following associative array :
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
*/

$person = ["Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Ramesh"=>"40"];

function getEach($array) {
    foreach ($array as $name => $age)
    {
        echo "NAME: {$name} AGE: $age \n";
    }
};

echo "\nA) Ascending order sorted by Value \n";
asort($person);
echo getEach($person);

echo "\nB) Ascending order sorted by Key \n";
ksort($person);
echo getEach($person);

echo "\nC) Descending order sorted by Value \n";
arsort($person);
echo getEach($person);

echo "\nD) Descending order sorted by Key \n";
krsort($person);
echo getEach($person);
