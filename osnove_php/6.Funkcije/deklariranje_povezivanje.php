<?php

// Funkcija bez parametra
function writeName(){
    echo 'Hello <robi';
}

writeName();

// Funkcija sa parametrima
function writeNameWithParameters(string $name) : void
{
    echo "hello $name";
}

writeNameWithParameters('Mario');