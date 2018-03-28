<?php

    // 1. Napisati funkciju koja prima višedimenzionalni niz kao parametar i ispisuje sve brojeve u njemu i svim podnizovima, razdvojene zapetama. Primer:
    //
    // Ako se prosledi niz        [ 1, 2, [3, 4], 5, 6, 7, [[8], 9] ]
    // Funkcija treba da ispiše    1, 2, 3, 4, 5, 6, 7, 8, 9
    //
    // Niz može da ima proizvoljno mnogo podnizova, koji mogu biti ugneždeni na proizvoljno mnogo nivoa.


    function ispisVisedimenzionalnog($niz)
    {
        foreach ($niz as $element) {
            if (is_array($element)) {
                ispisVisedimenzionalnog($element);
            } else {
                echo $element . ',';
            }
        }
    }
?>
