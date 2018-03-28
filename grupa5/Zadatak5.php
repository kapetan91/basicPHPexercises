<?php

// Napraviti promenljivu $prirodniBrojevi i dodeliti joj vrednost praznog niza. U ovaj niz upisati prvih 100 prirodnih brojeva pomoću for petlje. Ispisati sadržaj promenljive pomoću print_r funkcije

$prirodniBrojevi = []; 

for ($i = 1; $i <= 100; $i++) {
	$prirodniBrojevi[] = $i;
}

print_r($prirodniBrojevi);