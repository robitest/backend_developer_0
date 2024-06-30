<?php

function printBrakeRow(){
    echo '<br>';
}

function br($ponavljanje){
    echo str_repeat('<br>', $ponavljanje);
}

// Inicijalizacija varijable
$i = 1;

// Koristeći petlju while, ispišite prvih deset brojeva
while ($i <= 10) {
    echo $i . "\n";
    $i++;
}
br(15);
// Koristeći petlju for, ispišite višekratnike broja 3 do 100
for ($i = 3; $i <= 100; $i += 3) {
    echo $i . "<br>";
}

printBrakeRow();
// Tablica množenja od 1 do 10 pomocu while petlje
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "\n";
    }
    echo "\n"; // Dodavanje praznog retka između tablica za različite brojeve
}

printBrakeRow();
// Definirajte varijablu $names i dodijelite joj niz koji sadrži pet imena
$names = ["Ana", "Ivan", "Marko", "Petra", "Luka"];
printBrakeRow();
// Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti
foreach ($names as $key => $value) {
    echo "Ključ: $key, Vrijednost: $value\n";
}
printBrakeRow();
// Definirajte varijablu $names i dodijelite joj niz koji sadrži pet imena
$names = ["Ana", "Ivan", "Marko", "Petra", "Luka"];
printBrakeRow();
// Ispišite imena spojena sa zarezom i razmakom
echo implode(", ", $names);
printBrakeRow();
// Definirajte varijable a, b i c, te im dodijelite vrijednosti 15, 10 i 5
$a = 15;
$b = 10;
$c = 5;
printBrakeRow();
// Provjerite je li vrijednost b između a i c
if (($b > $a && $b < $c) || ($b > $c && $b < $a)) {
    echo "Vrijednost b je između a i c.\n";
} else {
    echo "Vrijednost b nije između a i c.\n";
}
printBrakeRow();
// Dohvati trenutni dan u tjednu kao broj (1 za ponedjeljak, 2 za utorak, itd.)
$dayOfWeek = date('N'); // 'N' format date() funkcije vraća numeričku reprezentaciju dana u tjednu (1 za ponedjeljak do 7 za nedjelju)

// Koristi switch strukturu za ispis naziva dana na hrvatskom jeziku
switch ($dayOfWeek) {
    case 1:
        echo "Ponedjeljak";
        break;
    case 2:
        echo "Utorak";
        break;
    case 3:
        echo "Srijeda";
        break;
    case 4:
        echo "Četvrtak";
        break;
    case 5:
        echo "Petak";
        break;
    case 6:
        echo "Subota";
        break;
    case 7:
        echo "Nedjelja";
        break;
    default:
        echo "Nepoznati dan";
        break;
}



?>


