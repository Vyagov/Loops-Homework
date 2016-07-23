<?php
/* Дадено е наредено тесте карти.
Наредбата по тежест на карта е: 2,3,4,5,6,7,8,9,10, Вале, Дама, Поп, Асо.
Наредбата по цвят на картите е: спатия, каро, купа, пика.
 
Да се създаде програма, чрез която се въвежда N - число от
интервала [1..51] и се извеждат въведения номер карта и
останалите по-големи карти от тестето. */

require_once 'readline.php';

echo 'Enter a integer number from interval [1..51]:', PHP_EOL;
$valid = true;

do {
	if (!$valid) {
		echo 'Enter a number from the interval!', PHP_EOL;
	}
	$valid = false;
	$number = readline('N = ');
} while ($number < 1 || $number > 51);

$counter = 0;

for ($cards = 2; $cards <= 14; $cards++) {
	for ($colors = 1; $colors <= 4; $colors++) {
		$counter++;

		if ($counter >= $number) {
			if ($cards <= 10) {
				echo $cards;
			}
			switch ($cards) {
				case 11:
					echo "Jack";
					break;
				case 12:
					echo "Queen";
					break;
				case 13:
					echo "King";
					break;
				case 14:
					echo "Ace";
					break;
			}
			switch ($colors) {
				case 1:
					echo " Clubs ", PHP_EOL;
					break;
				case 2:
					echo " Diamonds ", PHP_EOL;
					break;
				case 3:
					echo " Hearts ", PHP_EOL;
					break;
				case 4:
					echo " Spades ", PHP_EOL;
					break;
			}
		}
	}
}