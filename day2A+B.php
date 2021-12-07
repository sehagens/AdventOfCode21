<?php

	/*
	*	Day 2 - A
	*/
	
	// initialise horizontal and vertical variables
	
	$horizontalPos = 0;
	$depthPos = 0;
	
	// open file and read input line per line
	
	$handle = fopen("input.txt", "r");
	if ($handle) {
		while (($line = fgets($handle)) !== false ) {
			// split every line on space
			$arrLine = explode(" ", $line);
			// save the line as an array
			$inputArray[] = $arrLine;
		}
		fclose($handle);
	} else {
		echo "Problem reading file";
	}
	
	//print_r($inputArray);
	
	foreach($inputArray as $dirChange) {
				
		switch($dirChange[0]) {
			case "up":
				//echo "going up <br/>";
				$depthPos -= $dirChange[1];
				break;
			
			case "down":
				//echo "going down <br/>";
				$depthPos += $dirChange[1];
				break;
			
			case "forward":
				//echo "pedal to the metal <br/>";
				$horizontalPos += $dirChange[1];
				break;
			default:
				echo "unable to comply <br/>";
			
			
		}
	}
	
	echo "<h3>Day 2 - A</h3>";
	echo "Horizontal position: " . $horizontalPos . "<br/>";
	echo "Depth position: " . $depthPos . "<br/>";
	echo "Multiplied: " . $horizontalPos . " x " . $depthPos . " = " . $horizontalPos*$depthPos . "<p></p>";
	
	
	/*
	*	Day 2 - B
	*/
	
	$horizontalPos = 0;
	$depthPos = 0;
	$aim = 0;
	
	foreach($inputArray as $dirChange) {
				
		switch($dirChange[0]) {
			case "up":
				//echo "going up <br/>";
				$aim -= $dirChange[1];
				break;
			
			case "down":
				//echo "going down <br/>";
				$aim += $dirChange[1];
				break;
			
			case "forward":
				//echo "pedal to the metal <br/>";
				$horizontalPos += $dirChange[1];
				$depthPos += ($aim * $dirChange[1]); 
				break;
			default:
				echo "unable to comply <br/>";
			
			
		}
	}
	
	echo "<h3>Day 2 - B</h3>";
	echo "Horizontal position: " . $horizontalPos . "<br/>";
	echo "Depth position: " . $depthPos . "<br/>";
	echo "Multiplied: " . $horizontalPos . " x " . $depthPos . " = " . $horizontalPos*$depthPos;
	
?>
