<?php
/* Да се направи програма, която по дадено число N, да изчислява
N!, т.е. 1*2*3*4...*N.
Използвайте цикъл do-while. */

require_once 'readline.php';

do {
	$number = readline("Enter N >= 0: ");
} while ($number < 0 || !is_numeric($number));

$counter = 1;
$result = 1;

do {
	$result *= $counter;
	$counter++	;
} while ($counter <= $number);

echo "$number! = $result";