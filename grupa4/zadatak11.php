<?php

// Napisati PHP skriptu koja kreira promenljive $a, $b i $c i dodeljuje im vrednosti 5, 10, false respektivno. Kreirati i promenljivu $d i u slučaju da je $c tačno, dodeliti joj vrednost $a, a u suprotnom vrednost $b. Iskoristiti kondicionalni operator za ovo. Ispisati rezultat

$a = 5;
$b = 10;
$c = false;

$d = $c == true ? $a : $b;

var_dump($d);
