<?php
/* Да се състави програма, чрез която се въвежда две числа от
интервала [1..9].
Програмата да извежда таблицата за умножение.
Максималната стойност на множителите е определена от 2-те
числа. */

require_once 'readline.php';

echo 'Enter two integer number from interval [1...9]:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter 2 valid numbers!', PHP_EOL;
	}
	
	$valid = false;
	$num1 = readline('First number: ');
	$num2 = readline('Second number: ');
} while ($num1 < 1 || $num2 > 9);

for ($count1 = 1; $count1 <= $num1; $count1++) {
	for ($count2 = 1; $count2 <= $num2; $count2++){
		echo "$count1*$count2=".($count1 * $count2).";", PHP_EOL;
	}
}