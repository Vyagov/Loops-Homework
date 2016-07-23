<?php
/* Въведете число N, чрез уеб форма и изкарайте като
резултат следния триъгълник с височина N:
      *
     ***
    *****
.............
Кaто допълнително упражнение – нарисувайте същия
триъгълник, но незапълнен. */

require_once 'readline.php';

echo 'Enter an integer N > 0 for first triangle:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}

	$valid = false;
	$height = readline('N = ');
} while (!is_numeric($height) || $height < 1);

$space = $height;
$star = $height;

for ($row = 1; $row <= $height; $row++) {
	$col = 1;
	
	while ($col <= $star) {
		if ($col < $space) {
			echo ' ';
		} else {
			echo '*';
		}
		$col++;
	}
	$space--;
	$star++;
	echo PHP_EOL;
}

echo PHP_EOL;

echo 'Enter an integer N > 0 for second triangle:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}

	$valid = false;
	$height = readline('N = ');
} while (!is_numeric($height) || $height < 1);

$space = $height;
$star = $height;

for ($row = 1; $row <= $height; $row++) {
	$col = 1;
	
	while ($col <= $star) {
		if ($row < $height) {
			if ($col == $space || $col == $star) {
				echo '*';
			} else {
				echo ' ';
			}
		} else {
			echo '*';
		}
		$col++;
	}
	$space--;
	$star++;
	echo PHP_EOL;
}
