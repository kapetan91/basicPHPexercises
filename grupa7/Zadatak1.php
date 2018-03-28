<?php
    // Napisati PHP funkciju koja prima niz stringova i vraca jedan string tako sto spaja sve elemente niza

    function ourImplode($arrayOfStrings)
    {
        $finalString = '';
        foreach ($arrayOfStrings as $string) {
            $finalString = $finalString . $string;
        }
        return $finalString;
    }
?>
