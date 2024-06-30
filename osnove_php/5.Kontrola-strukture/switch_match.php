<?php

$variable = 3;

switch ($variable){
    case 1:
        echo 'Ponedjeljak';
        break;
    case 2:
        echo 'Utorak';
        break;
    case 3:
        echo 'Srijeda';
        break;
    case 4:
        echo 'Cetvrtak';
        break;
    default:
        echo 'Neznam koji je dan';
        break;
};      

$variable = 'uto';

switch ($variable){
    case 'pon':
        echo 'Ponedjeljak';
        break;
    case 'uto':
        echo 'Utorak';
        break;
    case 'sri':
        echo 'Srijeda';
        break;
    case 'cet':
        echo 'Cetvrtak';
        break;
    default:
        echo 'Neznam koji je dan';
        break;

};


$dan = match($variable){
    'pon' => 'Ponedjeljak',
    'uto' => 'Utorak',
    'sri' => 'Srijeda',
    default => 'Neznam koji jedan'
};

echo $dan;