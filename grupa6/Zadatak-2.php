<?php

/*

Napisati PHP funkciju koja množi prva dva argumenta i od tog rezultata oduzima 
vrednost trećeg argumenta. Ulazni parametri su brojevi $a, $b i $c. Funkcija 
vraća rezultat. Pozvati funkciju sa proizvoljnim vrednostima i ispisati 
rezultat koji vraća funkcija.

*/
function aTimesBminusC($a, $b, $c)
{
    return ($a * $b) - $c;
}

echo aTimesBminusC(3, 6, 5);
