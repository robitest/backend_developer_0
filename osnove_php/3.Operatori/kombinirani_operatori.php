<?php
    $a = 15;
    $b = 10;

    echo $a += $b; // Ekvivalent $a = $a + $b
    echo $a -= $b; // Ekvivalent $a = $a - $b
    echo $a *= $b; // Ekvivalent $a = $a * $b
    echo $a /= $b; // Ekvivalent $a = $a / $b
    echo $a %= $b; // Ekvivalent $a = $a % $b
    echo $a .= $b; // Ekvivalent $a = $a . $b


    $ime = 'Robert';
    $razmak = '<br>';
    $prezime = 'Hlobik';

    $ime .= $razmak; // -> 'Aleksandar '
    $ime .= $prezime;// -> 'Aleksandar Dobrinic'
    echo $ime;

    echo $razmak;
    echo $a .= $b . '<br>';
?>