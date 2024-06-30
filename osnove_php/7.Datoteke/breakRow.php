<?php

// Definiranje funkcije za skok u novi red <br>
function _Br($number = 1) : ?string
{
    for ($i=0; $i < $number; $i++) { 
        echo '<br>';
        
    }

    return null;
}

?>