<!-- Napisati funkciju koja racuna razliku izmedju dva datuma.
Primer datuma: 1981-11-04, 2013-09-04
Rezultat: 31 years, 10 months, 11 days -->

<?php

function dateDiff($firstDate, $secondDate)
{
    $diff = date_diff(date_create($firstDate), date_create($secondDate));
    echo $diff->y . ' years, ' . $diff->m . ' months, ' . $diff->d . ' days';
}

?>