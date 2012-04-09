<?php

$file = array(
	'10',
	'22',
	'56',
	'123',
	'256',
	'156489818'
	);

foreach($file as $integer){

	echo get_number_of_bits( $integer ) . "</br>" ;

}

function get_number_of_bits( $integer, $bit = "1" ){
	// Converts integer to binary
	// Returns the number of 'bits' within binary string
	return substr_count( decbin( $integer ), $bit );
}