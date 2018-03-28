<!-- Napisati funkciju koja konvertuje yyyy-mm-dd u dd-mm-yyyy.
Primer datuma : 2012-09-12
Rezultat : 12-09-2012 -->

<?php

function convertingDate($date)
{
    return date("d-m-Y", strtotime($date));;
}

echo convertingDate("2010-03-21");


?>