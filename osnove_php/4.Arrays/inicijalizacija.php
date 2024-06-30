<?php

// Inicijalizacija praznog niza
$empty1 = [];
$empty2 = array();

// Inicijalizacija niza (lista) s podacima
$names = ['Alex', 'Filip', 'Marko'];
$names = array('Alex', 'Filip', 'Janko');


echo '<pre>';
print_r($names);
echo '<pre>';
echo $names[1];


// Inicijalizacija niza (mapa) s podacima -> Associative array
$fruits = [
    'name' => 'Banana',
    'cijena' => '0,49 EUR',
    'klasa' => 'Prva'
];

$fruits = array(
    'name' => 'Banana',
    'cijena' => '12 EUR',
    'klasa' => 'Prva',
);



echo '<pre>';
print_r($fruits);
echo '<pre>';


$fruitsM = [
    'Banana' => [
        'id' => '0001',
        'cijena' => '0.49 EUR',
        'klasa' => 'prva'
    ],
    'Jagoda' => [
        'id' => '0002',
        'cijena' => '0.60 EUR',
        'klasa' => 'prva'
    ]
];

echo '<pre>';
print_r( $fruits);
echo '</pre>';

echo '<pre>';
var_dump($fruits);
echo '</pre>';