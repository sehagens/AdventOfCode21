<?php

$binaryInputArray;
$binaryGamma;
$binaryEpsilon;

$handle = fopen("input.txt", "r");
if ($handle) {
	while (($line = fgets($handle)) !== false ) {
		// split line on every character
		
		$arrLine = str_split($line);
		
		for ($i=0 ; $i<strlen($line)-1 ; $i++) {
			$binaryInputArray[$i][] = $arrLine[$i];
		}
		
	}
	fclose($handle);
} else {
	echo "Problem reading file";
}

// print_r($binaryInputArray);


foreach($binaryInputArray as $k => $v) {
	$binaryBalance = array_count_values($binaryInputArray[$k]);
	if ($binaryBalance[0] > $binaryBalance[1]) {
		// add 0 to binary Gamma
		$binaryGamma .= 0;
		$binaryEpsilon .=1;
	} elseif ($binaryBalance[1] > $binaryBalance[0]) {
		// add 1 to binary Gamma
		$binaryGamma .= 1;
		$binaryEpsilon .=0;
	}
}

echo "Gamma in binary = " . $binaryGamma . "<br/>";
echo "Epsilon in binary = " . $binaryEpsilon . "<br/>";

echo "Gamma in decimal = " . bindec($binaryGamma) . "<br/>";
echo "Epsilon in decimal = " . bindec($binaryEpsilon) . "<br/>";

echo "Powerconsumption = " . bindec($binaryGamma) . " x " . bindec($binaryEpsilon) . " = " . bindec($binaryGamma)*bindec($binaryEpsilon);

?>
