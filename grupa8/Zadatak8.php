<!-- Napisati funkciju koja ispisuje naziv meseca za zadati datum. -->

<?php

function getMonthName($month)
{
    $monthName = date("F", mktime(0, 0, 0, $month, 10));
    return $monthName;
}

echo getMonthName(4);

?>
