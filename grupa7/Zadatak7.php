<?php

    // Napisati funkciju koja prima kao parametre niz brojeva, i dva broja koja predstavljaju donju i gornju granicu opsega.
    // Funkcija treba da vraca novi niz, koji sadrzi samo one elemente originalnog niza koji se nalaze unutar opsega koji definisu drugi i treci parametar.

    function filterByRange($array, $lowerBound, $upperBound)
    {
        $newArray = [];
        foreach ($array as $element) {
            if ($element >= $lowerBound && $element <= $upperBound) {
                $newArray[] = $element;
            }
        }
        return $newArray;
    }

?>
