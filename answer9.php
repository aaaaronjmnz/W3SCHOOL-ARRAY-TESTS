<?php

$recordedTemperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

function averageTemperature($tempList)
{
    $uniqueTemperatures = array_unique($tempList);
    $mean = count($uniqueTemperatures);
    $totalTemperature = 0;

    foreach ($uniqueTemperatures as $temperature)
    {
        $totalTemperature += $temperature;
    }

    $averageTemperature = $totalTemperature / $mean;
    return "The average temperature is: {$averageTemperature} \n";
}

function sevenLowest($tempList)
{
    asort($tempList);
    $sevenLowest = array_slice($tempList, 0, 7);
    echo "List of seven lowest temperatures: ";
    foreach ($sevenLowest as $temperatures)
    {
       echo "{$temperatures}" . " ";
    }
}

function sevenHighest($tempList)
{
    arsort($tempList);
    $sevenHighest = array_slice($tempList, 0, 7);
    asort($sevenHighest);
    echo "\nList of seven highest temperatures: ";
    foreach ($sevenHighest as $temperatures)
    {
        echo "{$temperatures}" . " ";
    }
}

echo averageTemperature($recordedTemperatures);
echo sevenLowest($recordedTemperatures);
echo sevenHighest($recordedTemperatures);
