<?php
/* Да се прочетат 2 числа от клавиатурата А и В.
Да се изведат всички числа от А до В на степен 2(разделени с
запетая).Ако някое число е кратно на 3, да се изведе съобщение че
числото се пропуска „skip 3“.Ако сумата от всички изведени числа (без
пропуснатите) стане по-голяма от 200, да се прекрати извеждането. */

require_once 'readline.php';

$valid = true;

do {
	if (!$valid) {
		echo 'Enter 2 valid numbers!', PHP_EOL;
	}

	$valid = false;
	echo 'Enter A:', PHP_EOL;
	$firstNum = (int)readline();
	echo 'Enter B:', PHP_EOL;
	$secondNum = (int)readline();
} while (!is_numeric($firstNum) || !is_numeric($secondNum));

$start = $firstNum > $secondNum ? $secondNum : $firstNum;
$end = $firstNum > $secondNum ? $firstNum : $secondNum;

$sum = 0;

for ($i = $start; $i <= $secondNum; $i++) {
	if ($i % 3) {
		$product = $i * $i;
		$sum += $product;
		echo $product;
	} else {
		echo 'skip ' . $i;
	}
	
	if ($sum < 200 && $i < $secondNum) {
		echo ', ';
	} else {
		break;
	}
}
