<?php

    // Napisati funkciju koja prima kao parametre dva niza, i vraca niz koji se sastoji od elemenata iz oba niza spojenih u jedan.

    function mergeArrays($array1, $array2)
    {
        foreach ($array2 as $element) {
            array_push($array1, $element);
        }
        return $array1;
    }

?>
