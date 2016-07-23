<?php
/* Да се състави програма, която да изчисли сумата на всички
числа от 1 до въведено число N.
Използвайте цикъл do-while. */

require_once 'readline.php';

$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}

	$valid = false;
	$number = readline('Enter N = ');
} while (!is_numeric($number));

$counter = 1;
$sum = 0;

do {
	$sum += $counter;
	$counter++;
} while ($counter <= $number);

echo "The sum of all number from 1 to $number is: $sum";