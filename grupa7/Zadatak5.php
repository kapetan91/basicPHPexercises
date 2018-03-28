<?php

    // Napisati drugu verziju funkcije iz prethodnog zadatka, koja ce umesto broja osoba sa tim polom vracati novi niz, koji sadrzi osobe sa tim polom.
    // Niz koji se vraca ce imati istu strukturu kao originalni, ali sa manje elemenata.

    function getPeopleFromArray($array, $gender)
    {
        $newArray = [];
        foreach ($array as $element) {
            if ($element['pol'] === $gender) {
                $newArray[] = $element;
            }
        }
        return $newArray;
    }

?>
