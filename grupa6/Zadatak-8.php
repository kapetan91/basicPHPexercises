<?php

/*

Napisati PHP funkciju koja vraća niz svih neparnih celih brojeva u intervalu od $a do $b koji su ulazni parametri funkcije.

*/


function oddNumBetweenTwoVal($a,$b)
{
    $newArray = [];

    foreach (range(ceil($a), floor($b)) as $number) {
        if ($number % 2 == 1) {
            $newArray[] = $number;
        }
    }

    return $newArray;
}

$arr = oddNumBetweenTwoVal(2.2 , 7.8);
var_dump($arr);
