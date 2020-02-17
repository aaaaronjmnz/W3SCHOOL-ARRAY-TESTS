<?php

/*
$color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :

Output :
white, green, red,

green
red
white
*/

$colors = ['white', 'green', 'red'];

    foreach ($colors as $color)
    {
        echo $color . ", ";
    }

    echo '<br />';
    asort($colors);

    foreach ($colors as $color)
    {
        echo '<br />' . $color;
    }
