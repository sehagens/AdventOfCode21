<?php
/*
*	Day 1 - A
*/

// read input from url
$input = file_get_contents('input.txt');

// explode per newline into array
$inputArray = explode("\n", $input);

// set counter to 0 for depth increases
$depthMeasureIncrease = 0;

// read all measurements starting from the second measurement in the array
for ($i = 1; $i<count($inputArray); $i++) {
	//echo "Value:" . $inputArray[$i] . ' - ';
	if ($inputArray[$i] > $inputArray[$i-1]) {
		//echo "bigger <br/>";
		$depthMeasureIncrease++;
	} else {
		//echo "smaller <br/>";
	}
}

echo "# of Depth Increases:" . $depthMeasureIncrease . "<br/>";


/*
*	Day 1 - B
*/

// now for the more increased measurements: //
	
$threeMeasurementIncrease = 0;
$threeMeasurementArray;

// make all Three measurements first and save them in a different array - stop when there is a NULL result

foreach ($inputArray as $key => $val) {
	if ( ! is_null( $inputArray[$key+2] ) ) {
		$threeMeasurementArray[] = $inputArray[$key] + $inputArray[$key+1] +$inputArray[$key+2];
	}
}

// go over all results and count the amount of increases

for ($j = 1; $j<count($threeMeasurementArray); $j++) {
	if ($threeMeasurementArray[$j] > $threeMeasurementArray[$j-1]) {
			//echo "bigger <br/>";
			$threeMeasurementIncrease++;
		} else {
			//echo "smaller <br/>";
		}
}

echo "# of Three Measure Depth Increases:" . $threeMeasurementIncrease . "<br/>";

?>
