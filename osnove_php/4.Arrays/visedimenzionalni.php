<?php
// Višedimenzionalni niz 

$fruits = [
    ['ime' => 'Banana', 'cijena' => '12 EUR', 'klasa' => 1],
    ['ime' => 'Jagoda', 'cijena' => '9 EUR', 'klasa' => 2],
    ['ime' => 'Lubenica', 'cijena' => '6 EUR', 'klasa' => 1],
];

echo $fruits[0]['ime'];

echo '<pre>';
print_r($fruits);
echo '</pre>';


$fruits2 = [
    'banana' => ['ime' => 'Banana', 'cijena' => '12 EUR', 'klasa' => 1],
    'jagoda' => ['ime' => 'Jagoda', 'cijena' => '9 EUR', 'klasa' => 2],
    'lubenica' => ['ime' => 'Lubenica', 'cijena' => '6 EUR', 'klasa' => 1],
];

echo '<pre>';
print_r($fruits2);
echo '</pre>';

echo $fruits2['banana']['cijena'];

$users = [
    [
        'name' => 'Robi',
        'age' => '35',
        'gender' => 'male',
    ]
];

echo '<br>';
echo '<pre>';
var_dump($users);
echo '</pre>';

foreach ($users as $key => $user) {
            unset($users[$key]['age']);
}

echo '<br>';
echo '<pre>';
var_dump($users);
echo '</pre>';