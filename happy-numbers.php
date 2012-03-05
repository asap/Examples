<?php

$file = array(
	'1',
	'7',
	'22',
	'31'
	);


foreach( $file as $number ){
	if( isHappy( $number ) )
		echo "1<br />";
	else
		echo "0</br>";

}

function isHappy($n) {
	// Track numbers to prevent infinite loop
	$past = array();
	
  while (1) {
  	$total = 0;
    while ($n > 0) {
		// Get the sum of the square
    	$total += pow(($n % 10), 2);
      $n /= 10;
    }

		// Number is becoming happy
    if ($total == 1) return true;

		// Number is approaching unhappiness
    if (array_key_exists($total, $past)) return false;

		// Replace number
    $n = $total;

    $past[$total] = 0;
  }
}