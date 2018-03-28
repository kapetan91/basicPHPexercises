<!-- Napisati funkciju koja racuna broj godina na osnovu datuma rodjenja. -->

<?php

function getAge($dateOfBirth) {
    echo date_diff(date_create($dateOfBirth), date_create('today'))->y;
}

getAge('04/12/1991');

?>