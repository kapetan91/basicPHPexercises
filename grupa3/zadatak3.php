<?php

// Napisati PHP skriptu koja kreira promenljive $a i $b i dodeljuje im vrednosti 5 i 10 respektivno. Nakon toga, promeljivu $b sabrati sa brojem 3 i dodeliti opet u promenljivu $b. Zatim vrednost promenljive $b dodeliti u promeljivu $a. Ispisati vrednost $a

$a = 5;
$b = 10;

$b = $b + 3; // ili $b += 3;
$a = $b;

echo $a;
