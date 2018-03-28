<?php

/*

Napisati PHP funkciju koja za dati niz $array i dati broj $a koji predstavljaju ulazne parametre funkcije, vraća vrednost koliko puta se broj $a nalazi u datom nizu $array. Ispisati vrednost koju vraća funkcija.

*/
    
$array = [1,2,3,4,5,6,7,5,8,9,0];

function repeatingNumber($array, $i)
{
    $count = 0;

    foreach ($array as $val) {
        if ($val == $i) {
           $count++;
        }
    }

    return $count;        
}

echo repeatingNumber($array, 5);
