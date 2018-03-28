<?php

/*
	Napisati PHP skriptu koja za dati niz: 
	$capitals = array(
    		"Italy"      => "Rome",
    		"Luxembourg" => "Luxembourg",
    		"Belgium"    => "Brussels",
    		"Denmark"    => "Copenhagen",
    		"Finland"    => "Helsinki",
	);
ispisuje sledeće: 
	The capital of Italy is Rome  
	The capital of Luxembourg is Luxembourg  
	The capital of Belgium is Brussels
		The capital of Denmark is Copenhagen
		The capital of Finland is Helsinki
	Koristiti foreach petlju.

*/


$capitals = array(
    		"Italy"      => "Rome",
    		"Luxembourg" => "Luxembourg",
    		"Belgium"    => "Brussels",
    		"Denmark"    => "Copenhagen",
    		"Finland"    => "Helsinki",
);

foreach ($capitals as $key => $value) {
	echo "The capital of $key is $value. <br>";
}