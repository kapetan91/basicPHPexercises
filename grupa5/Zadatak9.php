<?php 

// Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa string. U slučaju da je broj elementa u nizu $a veći od broja elemeneta u nizu $b, ispisati sve elemenete niza $a. U suprotnom, ispisati elemente niza $b

$a = ['Jabuke', 'Kruske', 'Jagode'];
$b = ['Krompir', 'Krastavac', 'Lubenica', 'Dinja'];

if (count($a) > count($b)) {
	print_r($a);
} else {
	print_r($b);
}
