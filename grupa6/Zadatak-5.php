<?php

/*

Napisati PHP funkciju koja računa sumu svih vrednosti elemenata proizvoljnog 
niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati 
funkciju sa proizvoljnim vrednostima i ispisati sumu elemenata niza koju 
vraća funkcija.

*/
    

function sumAllElement($array) 
{ 
    $a = 0;

    foreach ($array as $element) {
        $a += $element;          
    }  

    return $a;
}

$array = array(13, 5, 10, 4, 8, 16);
$sum = sumAllElement($array);	
echo $sum;
