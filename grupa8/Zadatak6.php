<!-- Napisati funkciju koja proverava da li je zadati datum vikend. -->

<?php

function isWeekend($date)
{
    return (date('N', strtotime($date)) >= 6);
}

?>