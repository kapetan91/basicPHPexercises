<?php

    // Pročitati o algoritmu i pokusati implementaciju funkcije za sortiranje niza pomoću Bubble sort algoritma (https://en.wikipedia.org/wiki/Bubble_sort).

    function bubbleSort($niz)
    {
        for ($i = 0; $i < count($niz); $i++) {
            for ($j = 0; $j < $i; $j++) {
                if ($niz[$j] > $niz[$i]) {
                    list($niz[$i], $niz[$j]) = [ $niz[$j], $niz[$i] ];
                }
            }
        }
        return $niz;
    }
?>
