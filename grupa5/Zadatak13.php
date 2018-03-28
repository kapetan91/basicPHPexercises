<?php

// Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa integer. Napraviti treći niz $c koji sadrži uniju ova dva niza (svi elementi koji se nalaze u oba niza, bez ponavljanja elemenata). Koristiti for petlju

$a = [9, 28, 12, 7];
$b = [12, 98, 5, 2, 9, 28];
$c = [];

for ($i = 0; $i < count($a); $i++) {
		$c[] = $a[$i];
}

for ($i = 0; $i < count($b); $i++) {
	if (!in_array($b[$i], $c)) {
		$c[] = $b[$i];
	}
}

print_r($c);

