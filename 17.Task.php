<?php
/* �� �� ������� ��������, ����� ������� �������, ����� ������ ��
�������� ��� ����� *, � ������������ � ��������� ��� �������
����.
������ ����� b - ������� �� �������� ����� �� ���������
[3..20], c - ����� ����.
���������� �� �������� ����� for. */

require_once 'readline.php';

echo 'Enter B - the length of the side from interval [3..20] and', PHP_EOL;
echo 'Enter C - some sign (+, =, - ...):', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number B!', PHP_EOL;
	}

	$valid = false;
	$side = readline('B = ');
	$char = readline('C = ');

} while ($side < 3 || $side > 20);

for ($row = 1; $row <= $side; $row++) {
	for ($col = 1; $col <= $side; $col++) {
		if ($row > 1 && $row < $side && $col > 1 && $col < $side) {
			echo $char;
		} else {
			echo '*';
		}
	}
	echo PHP_EOL;
}