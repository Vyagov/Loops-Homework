<?php
/* Да се състави програма, която извежда първите 10 най-малки
числа, които се делят на 2, 3 или на 5 и които са по-големи от
въведено естествено число.
Числата се извеждат, заедно с техния пореден номер.
Входни данни: число от интервала [1..999]
Използвайте цикъл while. */

require_once 'readline.php';

echo 'Enter a integer number from interval [1...999]:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a number from the interval!', PHP_EOL;
	}
	$valid = false;
	$inputNum = readline('Number: ');
} while ($inputNum < 1 || $inputNum > 999);

$nextNum = 0;
$number = $inputNum + 1;

while ($nextNum < 10) {
	if ($number % 2 == 0 || $number % 3 == 0 || $number % 5 == 0) {
		$nextNum++;
		if ($nextNum < 10) {
			echo "$nextNum:$number, ";
		} else {
			echo "$nextNum:$number";
		}
	}
	$number++;
}