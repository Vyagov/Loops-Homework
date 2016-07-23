<?php
/* �� �� �������� 2 ����� �� ������������ � � �.
�� �� ������� ������ ����� �� � �� � �� ������ 2(��������� �
�������).��� ����� ����� � ������ �� 3, �� �� ������ ��������� ��
������� �� �������� �skip 3�.��� ������ �� ������ �������� ����� (���
������������) ����� ��-������ �� 200, �� �� �������� �����������. */

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
