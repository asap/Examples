<?php

$file = array(
	array( '1','1','1','2','2','3','3','4','4' ),
	array( '2','3','4','5','5' ),
	array( '12','23','23','45','35' ),
	array( '2','2','24','25','25' )
	);
	
// Read file
	foreach( $file as $line ){
		// Get unique element of each line
		// Wrap or Implode each element with a comma
		// put it on a single line
		echo implode( ",", array_unique( $line ) ) . "<br />";
	}