<?php
/* ���������� �� 3, �� �� ������� �� ������ ������� n
����� ����� �� ����� �� 3. ������� �� �� ��������� ��� �������. */

require_once 'readline.php';

$valid = true;

do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}

	$valid = false;
	echo 'Enter n > 0:', PHP_EOL;
	$number = readline();
} while (!is_numeric($number) || $number < 1);

$countDiv3 = 0;
$counter = 3;

while ($countDiv3 < $number) {
	if (!($counter % 3)) {
		$countDiv3++;
		echo $counter;
		
		if ($countDiv3 < $number) {
			echo ', ';
		}
	}
	
	$counter++;
}