<?php
/**
 * Domaca zadaca
 */

//  1. Proizvoljno deklarirajte funkciju koja vraća neki tekst.
function printText()
{
    return 'Ova funkcija vraca text.'; 
}

//  2. Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
$text = printText();

//  3. Ispišite vrijednost varijable.
echo $text;

// pozivanje funkcije za skok u novi red <br>
_Br(2);

//  4. Proizvoljno deklarirajte funkciju koja ima dva argumenta  (nameisurname). Funkcija treba konkatenirati podatke iz argumenata tako da između postoji razmak i dodijeliti ih lokalnoj varijabli, zatim treba vrijednost u varijabli pretvoriti u velika slova i to vratiti kao rezultat.
function printFullNameUppercase(string $name, string $surname ) : string 
{
    $fullName = $name . " " . $surname;
    $fullNameToUpper = strtoupper($fullName);
    return $fullNameToUpper;

}

//  5. Pozovite funkciju i vraćenuv rijednost dodijelite varijabli.
$fullNameUppercase = printFullNameUppercase('Robert', 'Hlobik');

//  6. Ispišite vrijednost varijable.
echo 'Vaše puno ime je: ' . $fullNameUppercase;

// pozivanje funkcije za skok u novi red <br>
_Br(2);

//  7. Proizvoljno deklarirajte funkciju koja ima jedanargument (number). Funkcija treba imati lokalnu varijablu u koju će pribrojiti vrijednost argumenta number te istu vratiti kao rezultat. Vrijednost treba biti zadržana kod svakog poziva funkcije.

function printStatic($number)
{
    static $sum = 0;
    $sum += $number;
    return $sum;

}

//  8. Deklarirajte funkciju kao varijablu.

$printRandomNumber = 'printStatic';

//  9. Pozovite funkciju pomoću varijable, a kao vrijednost argumenta pošaljite slučajan broj u rasponu od 1 do 10 te ispišite rezultat.

echo 'Sum of random number: ' . $printRandomNumber(rand(1, 10));

// pozivanje funkcije za skok u novi red <br>
_Br(2);

// 10. Ponovite postupak pet puta.
for ($i=0; $i <5; $i++) { 
    echo 'Sum of next random number ' . $printRandomNumber(rand(1, 10));
    _Br(1);
}