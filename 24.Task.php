<?php
/* Едно число X е палиндром, aко се чете еднакво отпред назад и
отзад напред.
Да се състави програма, която проверява дали въведено число е
палиндром.
Входни данни: N - естествено число от интервала [10 .. 30000].
Използвайте цикъл do-while. */

require_once 'readline.php';

echo 'Enter a integer number from interval [10...30000]:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a number from the interval!', PHP_EOL;
	}
	$valid = false;
	$input = readline('Number: ');
} while ($input < 10 || $input > 30000);

// The program can work with numbers greater than 30000.

$isPalindrome = false;
$digitCount = strlen($input);
$start = 1;
$num = $input;

while ($digitCount > $start) {
	$firstDigit = $num % 10;
	$lastDigit = ($input / pow(10, $digitCount - 1)) % 10;
	
	if ($firstDigit == $lastDigit) {
		$isPalindrome = true;
	} else {
		break;
	}
	$num = (int)($num / 10);
	$digitCount--;
	$start++;
}

echo 'The number is ';
echo $isPalindrome == true ? 'a palindrome.' : 'not a palindrome.';
