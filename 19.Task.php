<?php
/* Да се състави програма, чрез която по въведено
естествено число от интервала [10..99] се извежда поредица
числа, при спазване на следните изисквания:
1) ако предходното число е четно се извежда 0.5*числото;
2) ако предходното число е нечетно се извежда 3*числото +1.
Извеждането продължава докато не се получи стойност 1. */

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
