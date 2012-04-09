<?php

$lines = array(
		"1,2,3,4;4,5,6",
		"7,8,9;8,9,10,11,1"
	);

foreach( $lines as $line ){
	// Break up each line as a set divided by semi-colon
	$sets = explode( ";", $line);
	$setA = $sets[0];
	$setB = $sets[1];
	
	// Grab intersect of A and B
	$intersects = array_intersect( explode( ",", $setA ), explode( ",", $setB ) );
	
	// Print results
	foreach( $intersects as $member){
		echo $member . ", ";
	}
	
	echo "<br />";
	
}