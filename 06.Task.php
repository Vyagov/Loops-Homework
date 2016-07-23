<?php
/* Да се прочете число от екрана(конзолата) и да се
изведе сбора на всички числа между 1 и въведеното число.*/

require_once 'readline.php';

$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}

	$valid = false;
	echo 'Enter a number:', PHP_EOL;
	$number = readline();
} while (!is_numeric($number));

$sum = 0;

for ($i = 1; $i <= $number; $i++) {
	$sum += $i;
}

echo "The result is $sum.";