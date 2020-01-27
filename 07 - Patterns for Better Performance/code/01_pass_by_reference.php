<?php

# Pass By Value

$arr = array(1, 2, 3, 4, 5);

function increase_by_1 ($array) {
	$size = count($array);
	for ($i = 0 ; $i < $size ; $i++) {
		$array[$i] += 1;
	}
	return $array;
}

# Same Result
increase_by_1($arr);
print_r($arr);

echo "<br>";

# New Result
$arr = increase_by_1($arr);
print_r($arr);
echo "<br>";


############################################


# Pass By Reference

$arr = array(1, 2, 3, 4, 5);

function increase_by_1_ref (&$array) {
	$size = count($array);
	for ($i = 0 ; $i < $size ; $i++) {
		$array[$i] += 1;
	}
	return $array;
}

increase_by_1_ref($arr);
print_r($arr);

?>