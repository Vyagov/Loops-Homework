<?php
/* Да се въведат от потребителя 2 числа. И да се изведат
на екрана всички числа от по-малкото до по-голямото. */

require_once 'readline.php';

$valid = true;

do {
	if (!$valid) {
		echo 'Enter 2 valid numbers!', PHP_EOL;
	}
	
	$valid = false;
	echo 'Enter first number:', PHP_EOL;
	$firstNum = readline();
	echo 'Enter second number:', PHP_EOL;
	$secondNum = readline();
} while (!is_numeric($firstNum) || !is_numeric($secondNum));

if ($firstNum > $secondNum) {
	$firstNum ^= $secondNum;
	$secondNum ^= $firstNum;
	$firstNum ^= $secondNum;
}

for ($i = $firstNum; $i <= $secondNum; $i++) {
	echo $i . ' ';
}
