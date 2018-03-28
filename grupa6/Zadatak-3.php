<?php

/*

Napisati PHP funkciju koja prima tri numerička parametra: $a, $b i $c. U slučaju da je parametar 
$a veći od 0, funkcija vraća zbir $b i $c, u suprotnom vraća razliku $b i $c. Pozvati funkciju 
sa proizvoljnim vrednostima i ispisati rezultat koji vraća funkcija.

*/

function plusOrMinus($a, $b, $c)
{
    return $a > 0 ? $b + $c : $b - $c;
}

echo plusOrMinus(-3, 6, 5);
