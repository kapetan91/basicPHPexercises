<?php

/*

Napisati PHP funkciju koja vraća prvih 10 parnih brojeva većih od broja 
$n (zajedno sa $n, ako je $n paran broj) koji je ulazni parametar funkcije.

*/

function firstTenEvenNum($n)
{
    $newArray = [];

    $i = $n;
    if ($i % 2 != 0) {
        $i++;
    }

    while (count($newArray) < 10) {
        $newArray[] = $i;
        $i += 2;
    }
    
    return $newArray;
}

$array = firstTenEvenNum(13);
var_dump($array);
