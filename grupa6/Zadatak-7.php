<?php

/*

Napisati PHP funkciju koja računa srednju vrednost elemenata proizvoljnog niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati vrednost koju vraća funkcija.

*/
 
function middleValue($array) 
{ 
	if (!empty($array)) {
    	$a = 0;
    	
    	foreach ($array as $element) {
    		$a += $element;
        }  

        return $a / count($array);
    }

    return NULL;
}

$array = array(1,4,6,3,8);
$sum = middleValue($array);
echo $sum;
