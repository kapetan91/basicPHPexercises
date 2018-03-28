<?php

    // Napisati funkciju koja prima niz i vraca drugi niz sa obrnutim redosledom elemenata.

    // Jedan nacin:
    function ourReverse1($array)
    {
        $reversedArray = [];
        $i = 0;
        $j = count($array) - 1;

        while ($i < count($array)) {
            $reversedArray[$i] = $array[$j];
            $i++;
            $j--;
        }
        return $reversedArray;
    }

    // Drugi nacin:
    function ourReverse2($array)
    {
        $reversedArray = [];
        for ($i = 0; $i < count($array); $i++) {
            $reversedArray[$i] = $array[count($array) - $i - 1];
        }
        return $reversedArray;
    }

    // Treci nacin:
    function ourReverse3($array)
    {
        $reversedArray = [];
        foreach ($array as $element) {
            array_unshift($reversedArray, $element);
        }
        return $reversedArray;
    }
?>
