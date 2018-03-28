<?php

// Napraviti promenljivu $meseci i dodeliti joj vrednost asocijativnog niza koji kao ključeve sadrži ime meseca a kao vrednost broj dana u tom mesecu. Iterirajući kroz ovaj niz ispisati sve moguće datume u godini. Za iteriranje kroz niz koristiti foreach petlju.

$meseci = [

	'Januar'    => 31,
	'Februar'   => 28,
	'Mart'      => 31,
	'April'     => 30,
	'Maj'       => 31,
	'Jun'       => 30,
	'Jul'       => 31,
	'Avgust'    => 31,
	'Septembar' => 30,
	'Oktobar'   => 31,
	'Novembar'  => 30,
	'Decembar'  => 31
];

foreach ($meseci as $mesec => $brojDana) {
	for ($dan = 1; $dan <= $brojDana; $dan++) {
		echo "$dan. $mesec <br>";	
	}	
}