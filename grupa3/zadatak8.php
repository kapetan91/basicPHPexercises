<?php

// Napisati PHP skriptu koja kreira promenljive $a, $b, $c i $d i dodeljuje im vrednosti 5, 10, 7, 12 respektivno. Kreirati i promenljivu $f i u slučaju da je $a veće od $c dodeliti joj zbir $b i $d, a u suprotnom razliku $b i $d. Iskoristiti kondicionalni operator za ovo. Ispisati rezultat

$a = 5;
$b = 10;
$c = 7;
$d = 12;

$f = ($a > $c) ? $b + $d : $b - $d;

var_dump($f);
