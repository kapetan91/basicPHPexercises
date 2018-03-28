<?php

// Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa integer. Napraviti treći niz $c koji sadrži uniju ova dva niza (svi elementi koji se nalaze u oba niza, bez ponavljanja elemenata).Koristiti ugrađenu php funkciju (pronaći funkciju)

$a = [9, 28, 12, 7];
$b = [12, 98, 5, 2, 9, 28];

$c = array_unique(array_merge($a, $b));

print_r($c);