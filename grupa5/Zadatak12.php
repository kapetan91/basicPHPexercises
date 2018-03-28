<?php

// Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa integer. Napraviti treći niz $c koji sadrži presek ova dva niza (elementi koji se nalaze u oba niza). Koristiti ugrađenu php funkciju (pronaći funkciju)

$a = [9, 28, 12, 7];
$b = [12, 98, 5, 2, 9, 28];

$c = array_intersect($a, $b);

print_r($c);

