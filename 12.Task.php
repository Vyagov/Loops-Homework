<?php
/* �� �� ������� ��������, ����� ������� ������
���������� ���������� �����, ����� ����� ������� ����� �.�.
100,101, 606 � �.�. �� �� ��������.*/

for ($threeDigitNum = 100; $threeDigitNum <= 999; $threeDigitNum++) {
	$firstDigit = ($threeDigitNum / 100) % 10;
	$secondDigit = ($threeDigitNum / 10) % 10;
	$thirdDigit = $threeDigitNum % 10;

	if ($firstDigit != $secondDigit && $firstDigit != $thirdDigit && $secondDigit != $thirdDigit) {
			echo $threeDigitNum, PHP_EOL;
	}
}
