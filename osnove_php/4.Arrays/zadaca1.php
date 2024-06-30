<?php

// Inicijalizacija niza u varijabli
$primeNumbers = [2,3,5,7,11];

// Ispis inicijaliziranog niza u varijabli
echo 'Inicijalizacija niza u varijabli: primeNumbers' ;

echo '<pre>';
print_r($primeNumbers);
echo '<pre>';
echo '<br>';

// Provjera postoji li treci elemenat u nizu i ispis
$isTrue = in_array(2, $primeNumbers);
echo 'Provjera postoji li treći elemenat u nizu: ';
var_dump($isTrue);
echo '<br>';

// if/else kontrola ispisa
if(!$isTrue){
    echo 'Trazeni element u nizu ne postoji.';
}else{
    echo 'Ispis vrijednosti trećeg elementa: ' . $primeNumbers[2];
}
echo '<br>';

// Dodavanje novog elementa na zadnje mjesto u nizu
$primeNumbers[] = 13;
echo '<br>';

// Provjera zbroja elemenata
$num = count($primeNumbers);
echo 'Ispis broja elemenata nakon dodavanja novih: ' . $num;
echo '<br>';
echo '<br>';

// Ispis cijelog niza
echo 'Ispis cijelog niza: ';
var_dump($primeNumbers);
echo '<br>';

// Sortiranje niza silazno po vrijednostima
$primeNumbersSorted = $primeNumbers;
rsort($primeNumbersSorted);
echo 'Ispis silazno sortiranog niza: ';
var_dump($primeNumbersSorted);


