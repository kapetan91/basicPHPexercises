<?php

/*

Napisati PHP funkciju koja računa proizvod svih vrednosti elemenata proizvoljnog 
niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati 
funkciju sa proizvoljnim vrednostima i ispisati proizvod elemenata niza koji 
vraća funkcija.

*/

function multiplyAllElement($array) 
{
	if (!empty($array)) {
		$a = 1;

	    foreach ($array as $element) {
	       $a *= $element;	          
	    }

	    return $a;
	}  

	return NULL;   
}

$array = array(2,3,5,8,9);
$sum = multiplyAllElement($array);
echo $sum;
