<?php

$empty_array = [];
$names = ['Alex', 'Filip', 'Marko', 'Jura'];
$names2 = ['Ivan', 'Luka'];

// empty and isset funkcije
$is_variable_empty = empty($names);
var_dump($is_variable_empty);
echo '<br>';
var_dump(isset($empty_array));

//in_array and array_search funkcije
echo '<br>';
var_dump(in_array('Alex', $names));
echo '<br>';
var_dump(array_search('Alex', $names));

// sortiranje
sort($names);
rsort($names);
asort($names);
ksort($names);

echo '<pre>';
print_r($names);
echo '</pre>';


// Push and Pop and Shift

array_push($names, 'Mosha');

echo '<pre>';
print_r($names);
echo '</pre>';

$last_elemenet = array_pop($names);

echo '<pre>';
print_r($last_elemenet);
echo '</pre>';

$first_value = array_shift($names);
echo $first_value;
echo'<br>';
echo '<pre>';
print_r($first_value);
echo '</pre>';
echo'<br>';

var_dump(array_keys($names));
echo'<br>';
var_dump(array_values($names));
echo'<br>';
var_dump(count($names));
echo'<br>';

$merged = array_merge($names, $names2);
var_dump($merged);