<?php

/*

Napisati PHP funkciju koja za dati niz $array i dati broj $a koji predstavljaju ulazne parametre funkcije, vraća vrednost koliko je elemenata niza $array deljivo sa brojem $a. Ispisati vrednost koju vraća funkcija.

*/
    
$array = [1,2,3,4,5,6,7,5,8,9,0];

function accountDivideNum($array, $b)
{
    $count = 0;

    foreach ($array as $val){
        if ($val % $b == 0 && $val != 0) {
           $count++;
        }
    }

    return $count;        
}

echo accountDivideNum($array, 2);
