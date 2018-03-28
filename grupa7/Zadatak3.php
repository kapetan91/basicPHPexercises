<?php

    // Napisati funkciju koja prima niz stringova kao prvi parametar, i neki string kao drugi parametar.
    // Funkcija treba da vrati broj koji pokazuje koliko puta se dati string pojavljuje u datom nizu.

    function countInArray($array, $string)
    {
        $count = 0;
        foreach ($array as $element) {
            if ($element === $string) {
                $count++;
            }
        }
        return $count;
    }

?>
