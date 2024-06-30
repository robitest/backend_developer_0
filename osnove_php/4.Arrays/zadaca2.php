<?php

// Definiranje varijable users i dodijela višedimenzionalnog niza 
$users = [
    [
        'ime' => 'Robert',
        'prezime' => 'Hlobik',
        'godine' => 35,
        'spol' => 'muski',
    ],
    [
        'ime' => 'Ana',
        'prezime' => 'Blink',
        'godine' => 33,
        'spol' => 'zenski',
    ]
];


// Ispis cijelog niza
echo '<pre>';
print_r($users);
echo '</pre>';

// Ispis ključa spol i njegova vrijednost

echo '<pre>';
echo 'Ispis spola prvog korisnika: ';
print_r($users[0]['spol']);
echo '</pre>';
echo '<pre>';
echo 'Ispis spola drugog korisnika: ';
print_r($users[1]['spol']);
echo '</pre>';

$users[] = [
    'ime' => 'Pero',
    'prezime' => 'Stero',
    'godine' => 24,
]; 

// Ispis cijelog niza
echo '<pre>';
print_r($users);
echo '</pre>';