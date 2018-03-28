<?php

/*

Napisati PHP funkciju koja vraća najmanji element niza. Niz je ulazni parametar 
funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim 
vrednostima i ispisati najmanji element niza koji vraća funkcija.

*/
 

function minimum($array) 
{
    $min = $array[0];
    
    foreach ($array as $element) {
        if ($element < $min) {            
           $min = $element;
        }  
     }
    
    return $min;
}

$array = [13, 5, 10, 8, 16];
$min = minimum($array);

echo $min;
