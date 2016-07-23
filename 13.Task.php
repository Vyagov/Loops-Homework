<?php
/* Да се състави програма, която извежда всички
естествени трицифрени числа, които имат сбор на цифрите равен
на дадено число.
Дадено : sum, където 2>=sum<=27. */

require_once 'readline.php';

echo 'Enter the sum from interval [2...27]:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid sum!', PHP_EOL;
	}

	$valid = false;
	$inputSum = readline('Sum = ');
} while ($inputSum < 2 || $inputSum > 27);

for ($threeDigitNum = 100; $threeDigitNum <= 999; $threeDigitNum++) {
	
	$sum = 0;
	$number = $threeDigitNum;
	
	while ($number > 0) {
		$digit = $number % 10;
		$sum += $digit;
		$number = (int)($number / 10);
	}
	
	if ($inputSum == $sum) {
		echo $threeDigitNum . ' ';
	}
}
