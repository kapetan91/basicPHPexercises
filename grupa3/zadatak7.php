<?php

// Napisati PHP skriptu koja kreira promenljive $a, $b, $c i $d i dodeljuje im vrednosti 5, 10, 7, 12 respektivno. Kreirati i promenljivu $f i u slučaju da je $c veće od $a dodeliti joj vrednost $b, a u suprotnom vrednost $d. Iskoristiti kondicionalni operator za ovo. Ispisati rezultat

$a = 5;
$b = 10;
$c = 7;
$d = 12;

$f = ($c > $a) ? $b : $d;

var_dump($f);
