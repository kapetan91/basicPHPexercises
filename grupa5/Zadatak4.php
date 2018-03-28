<?php

/*
	Napisati PHP skriptu koja ispisuje sledeći string: 

"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"

Reči 'red', 'green' and 'white' u datom stringu su iz niza $color = array('white', 'green', 'red', 'blue', 'black');

*/

$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever
	  frozen at that moment: the $color[2] carpet, the $color[1] lawn, 
	  the $color[0] house, the leaden sky. The new president and his first lady. 
	  - Richard M. Nixon";