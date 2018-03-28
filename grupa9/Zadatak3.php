<?php

    // 3. Napisati funkciju koja prihvata dva niza brojeva, a1 i a2, i vraća treći niz, a3, iste dužine kao a2, čiji elementi predstavljaju broj puta koliko se svaki odgovarajući element a2 javlja u nizu a1. Koristiti array_map() i funkciju za brojanje elemenata urađenu u ranijim zadacima.


    function izbroj($niz1, $niz2)
    {
        return array_map(function($elementNiza2) use ($niz1) {
            $count = 0;
            foreach ($niz1 as $elementNiza1) {
                if ($elementNiza1 === $elementNiza2) {
                    $count++;
                }
            }
            return $count;
        }, $niz2);
    }
?>
