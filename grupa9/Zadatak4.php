<?php

    // 4. Napisati funkciju za sortiranje niza pomocu ugrađene funkcije usort() (http://php.net/manual/en/function.usort.php).


    // Jedan nacin:
    function sortirajSaUSort1($niz)
    {
        usort($niz, function($element1, $element2) {
            if ($element1 > $element2) {
                return 1;
            } else if ($element2 > $element1) {
                return -1;
            } else {
                return 0;
            }
        });
        return $niz;
    }

    // Drugi nacin:
    function sortirajSaUSort2($niz)
    {
        usort($niz, function($element1, $element2) {
            return $element1 - $element2;
        });
        return $niz;
    }
?>
