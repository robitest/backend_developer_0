<?php

function addNumbers(int $a,int $b, bool $printResult = false): ?int
{
    $sum = $a + $b;

    if($printResult === true){
        echo 'This result is: ' . $sum;
        return null;
    }

    return $sum;
}


$sum = addNumbers(3, 4,);
$sum = addNumbers(3, 4, true);
$sum = addNumbers(3, 4, false);

var_dump($sum);