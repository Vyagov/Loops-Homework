<?php
/*По зададено число n, да се изведе на екрана таблица по
следния начин:
Въведете n:  Въведете n:   Въведете n:   Въведете n:
1	 		 2	           3     		 4
0	 		 11		       222		   	 3333
 		  	 33	    	   444  	     5555
 						   666			 7777
                                         9999               */

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

$print = $number - 1;

for ($i = 0; $i < $number; $i++) {
	for ($j = 0; $j < $number; $j++) {
		echo $print;
	}
	$print += 2;
	echo PHP_EOL;
}
