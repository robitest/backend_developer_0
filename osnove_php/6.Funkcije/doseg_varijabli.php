<?php

$name = "Mirko";

function variableScope($name)
{
    global $name;

    echo $name;
}

variableScope($name);