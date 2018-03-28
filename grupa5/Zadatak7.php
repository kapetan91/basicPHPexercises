<?php

// Napraviti dva niza, $a i $b. Koristeći jednu for petlju, postaviti sve parne brojeve od 1 do 100 u niz $a, i sve neparne brojeve od 1 do 100 u niz $b. Ispisati sadržaj nizova


$a = [];
$b = [];

for ($i = 1;$i <= 100;$i++) {
	if ($i % 2 == 0) {
		$a[] = $i;
	} else {
		$b[] = $i;
	}
}

echo "Niz parnih brojeva (\$a): ";

foreach ($a as $value) {
	echo "$value, ";
}

echo "<br>Niz neparnih brojeva (\$b): ";

foreach ($b as $value) {
	echo "$value, ";
}