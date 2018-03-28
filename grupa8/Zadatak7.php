<!-- Napisati funkciju koja prima parametre mesec i godinu i ispisuje koliko dana ima zadati mesec.
Primer: getDaysInMonth(4, 1991) -->

<?php

function getDaysInMonth($month , $year)
{
    return $number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
}

echo getDaysInMonth(1 , 2017);

?>