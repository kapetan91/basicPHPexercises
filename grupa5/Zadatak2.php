<?php 

//Napisiati PHP skriptu koja kreira numerički niz koji predstavlja mesece u godini i pomoću foreach petlje ispisati sve elemente niza.

$months = [];

for ($i = 1;$i <= 12; $i++) {
	$months[] = $i;
}

foreach ($months as $month) {
	echo $month . "<br>";
}