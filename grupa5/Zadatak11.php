<?php

// Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa integer. Napraviti treći niz $c koji sadrži presek ova dva niza (elementi koji se nalaze u oba niza). Koristiti for petlju

$a = [5, 8, 12, 30];
$b = [12, 98, 5, 2];
$c = [];

for ($i = 0; $i < count($a); $i++) {
	if (in_array($a[$i], $b)) {
		$c[] = $a[$i];
	}
}

print_r($c);
