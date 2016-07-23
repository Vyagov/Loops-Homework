<?php
/* �� �� ������� ��������, ����� �� ��������
���������� ����� N �� ��������� [10..200] ������� � �������
��� ������ �����, ����� �� ������ �� 7 � �� ��-����� �� N. */

require_once 'readline.php';

echo 'Enter integer number from interval [10...200]:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}

	$valid = false;
	$number = readline('N = ');
} while ($number < 10 || $number > 200);

for ($counter = $number; $counter >= 10; $counter--) {
	if ($number < 14) {
		echo "No numbers smaller than $number multiples of 7.";
		break;
	}
	
	if ($counter % 7 == 0) {
		echo $counter . ' ';
	}
}
