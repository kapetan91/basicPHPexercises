<?php 

// Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa string. Uz pomoć for petlje dodati elemente niza $b u niz $a u obrnutom redosledu.

$a = ['blue', 'yellow', 'orange'];
$b = ['white', 'red', 'green'];

for ($i = count($b) - 1; $i >= 0; $i--) {
	 array_push($a, $b[$i]);	
}

print_r($a);