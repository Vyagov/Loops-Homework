<?php
/* �� �� ������� ��������, ���� ����� �� �������� 2 ����������
����� N, M �� ��������� [10..5555].
����������, ���� ����� for, �� ������� ������ ����� ��
���������, ����� �� ������ �� 50 � �������� ���. */

require_once 'readline.php';

echo 'Enter 2 integer number from interval [10...5555]:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter 2 valid numbers!', PHP_EOL;
	}
	
	$valid = false;
	$num1 = (int)readline('N = ');
	$num2 = (int)readline('M = ');
} while ($num1 < 10 || $num2 > 5555);

$start = $num1 > $num2 ? $num2 : $num1;
$end = $num1 > $num2 ? $num1 : $num2;

$isMultiples = false;

for ($counter = $end; $counter >= $start; $counter--) {
	if ($counter % 50 == 0) {
		$isMultiples = true;
		echo $counter . ' ';
	}
}

if (!$isMultiples) {
	echo "No numbers multiples of 50 in interval [$num1...$num2].";;
}
