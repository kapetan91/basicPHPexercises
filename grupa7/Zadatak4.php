<?php

    // Napisati funkciju koja prima asocijativni visedimenzionalni niz sa imenima i polovima osoba kao prvi parametar, i string 'm' ili 'z' kao drugi parametar.
    // Struktura niza koji se prosledjuje bice ovakva: [['ime' => 'Petar Petrovic', 'pol' => 'm'], ['ime' => 'Jagodinka Simonovic', 'pol' => 'z'], ...]
    // Funkcija treba da vrati broj koji pokazuje koliko osoba sa tim polom se nalaze u tom nizu.

    function countPeopleInArray($array, $gender)
    {
        $count = 0;
        foreach ($array as $element) {
            if ($element['pol'] === $gender) {
                $count++;
            }
        }
        return $count;
    }

?>
