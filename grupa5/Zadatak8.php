<?php

// Napraviti dva niza, $a i $b sa po proizvoljnih 10 elemenata tipa string. Napraviti asocijativni niz $c koji koristi elemente niza $a kao ključeve, i elemente niza $b kao vrednosti

$a = ['BMW', 'Audi', 'Mercedes', 'Opel', 'Porsche', 'Volkswagen', 'Peugeot', 'Citroen', 'Reno', 'Ford'];
$b = ['Crveni', 'Plavi', 'Zeleni', 'Zuti', 'Sivi', 'Crni', 'Beli', 'Braon', 'Teget', 'Bordo'];
$c = [];

for($i = 0; $i < count($a); $i++) {
	$c[$a[$i]] = $b[$i];
}

// $c = array_combine($a, $b); - Resenje zadatka se moze dobiti i ovom funkcijom

print_r($c);