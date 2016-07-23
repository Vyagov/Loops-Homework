<?php
/* �������� ����� �� ������������ � ���������� ���� �
������. ������ ����� � ���� ����� �� ���� ���� �� 1 � �� ���� ��. */

require_once 'readline.php';

echo 'Enter an integer number > 1:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}

	$valid = false;
	echo 'number = ';
	$number = readline();
} while (!is_numeric($number) || $number <= 1);

$isPrime = true;

for ($div = 2; $div <= sqrt($number); $div++) {
	if ($number % $div == 0) {
		$isPrime = false;
		break;
	}
}

echo 'The number is ';
echo $isPrime ? 'prime.' : 'not prime.';
