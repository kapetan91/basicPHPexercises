<?php

/*

Napisati PHP funkciju koja proverava da li su svi elementi datog niza u datom opsegu. Ulazni parametri funkcije su niz, donja granica i gornja granica.

*/
    
function isArrayInScope($array, $a, $b)
{
    foreach ($array as $val) {
        if ($a > $val || $b < $val) {
           return false;
        }
    }

    return true;
}

$array = [3,4,5,6,7,12];
$scope = isArrayInScope($array, 2, 15);

var_dump($scope);
