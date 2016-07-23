<?php
/* �� �� ������� ��������, ���� ����� �� ��������
���������� ����� �� ��������� [10..99] �� ������� ��������
�����, ��� �������� �� �������� ����������:
1) ��� ����������� ����� � ����� �� ������� 0.5*�������;
2) ��� ����������� ����� � ������� �� ������� 3*������� +1.
����������� ���������� ������ �� �� ������ �������� 1. */

require_once 'readline.php';

$valid = true;
echo 'Enter a integer number from interval [10...99]:', PHP_EOL;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}
	
	$valid = false;
	$num = readline('Number: ');
} while ($num < 10 || $num > 99);

$result = $num;

while ($result > 1) {
	if ($result % 2 == 0) {
		$result *= 0.5;
	} else {
		$result = $result * 3 + 1;
	}
	
	echo $result . ' ';
}
