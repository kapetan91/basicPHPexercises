<?php

    // 2. Napisati funkciju koja, za dati niz elemenata koji sadrzi cele brojeve, kreira i vraća drugi niz iste duzine koji sadrzi elemente tipa string, koji definisu da li je odgovarajuci element iz originalnog niza paran ili neparan. Koristiti PHP funkciju array_map().

    function paranNeparan($niz) {
        return array_map(function($element) {
            if ($element % 2 === 0) {
                return "paran";
            } else {
                return "neparan";
            }
        }, $niz);
    }

?>
