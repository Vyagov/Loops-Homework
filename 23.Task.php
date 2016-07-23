<?php
/* Да се състави програма, която чрез цикъл while извежда
таблицата за умножение, но без повторение.
Т.е. ако е изведено 4*5 не се извежда 5*4. */

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