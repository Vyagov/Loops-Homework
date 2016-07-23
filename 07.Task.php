<?php
/* Започвайки от 3, да се изведат на екрана първите n
числа които се делят на 3. Числата да са разделени със запетая. */

require_once 'readline.php';

$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}

	$valid = false;
	echo 'Enter n > 0:', PHP_EOL;
	$number = readline();
} while (!is_numeric($number) || $number < 1);

$countDiv3 = 0;
$counter = 3;

while ($countDiv3 < $number) {
	if (!($counter % 3)) {
		$countDiv3++;
		echo $counter;
		
		if ($countDiv3 < $number) {
			echo ', ';
		}
	}
	
	$counter++;
}