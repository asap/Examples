<?php

// Read File

$file = array(
	"2",
	"Hello World",
	"CBS Local",
	"Quick Fox",
	"A",
	"San Francisco"
	
	);


// Get first line and assign to counter
	$number_of_results = (int) array_shift( $file );

// Return longest X lines

	$final = return_longest_lines( $file, $number_of_results );
	
	foreach( $final as $line ){
		echo "$line</br>\n";
	}
	

function return_longest_lines( $lines, $number_of_lines_to_return){
	// Count how many lines we have
	
	$count = count($lines);

	// Add some padding to the array
		for($i = 0; $i < $count; $i++) {
        $line = trim( $lines[$i] );
        $line_length = strlen($line);
        $padded_line_length = str_pad($line_length, 10, "0", STR_PAD_LEFT);
        $lines[$i] = $padded_line_length . " /|\/|\/|\ " . $lines[$i];
    }
    
		// Sort the lines from longest to shortest
    rsort($lines);

		// Clean the padding off
    for($i = 0; $i < $count; $i++)
    {
        $line = $lines[$i];
        $line_exploded = explode(" /|\/|\/|\ ", $line);
        $lines[$i] = $line_exploded[1];
    }
	
		// Take what we need off the top
		return array_splice( $lines, 0, $number_of_lines_to_return );
}