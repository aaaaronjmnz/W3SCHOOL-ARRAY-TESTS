<?php

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
