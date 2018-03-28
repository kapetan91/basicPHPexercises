<!-- Napisati funkciju koja ispisuje copyright informacije sa tekucom godinom u sledecem formatu:
© 2013 VivifyAcademy -->

<?php

function displayCurenYear()
{
    echo "© " ,  date('Y') , " VivifyAcademy";
}

displayCurenYear()

?>