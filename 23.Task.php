<?php
/* �� �� ������� ��������, ����� ���� ����� while �������
��������� �� ���������, �� ��� ����������.
�.�. ��� � �������� 4*5 �� �� ������� 5*4. */

$counter = 1;
$number = 1;

while ($number <= 9) {
	echo "$number*$counter; ";

	if ($counter == 9) {
		echo PHP_EOL;
		$counter = $number;
		$number++;
	}
	$counter++;
}