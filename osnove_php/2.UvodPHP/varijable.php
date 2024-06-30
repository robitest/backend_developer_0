<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Imena varijabli su osjetljiva na velika i mala slova
$ime = 'robert';
$Ime = 'Robert';

echo $ime;
echo '<br>';
echo $ime;



//primjer neispravne definicije imena varijable 
// $123ime;
// $-ime;
// $ ime;

// nakon znaka $ ime varijable moze zapoceti sa slovom  ili _(donja crta)
//primjer neispravne definicije imena varijable 
$_ime;
$ime123;
$ime_prezime; // -> snake case
$imePrezime; // Camel Case

// Konstante
define("PI", 3.14);
const OIB = 52473519832;

echo gettype(OIB);