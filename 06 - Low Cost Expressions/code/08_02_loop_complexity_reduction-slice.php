<?php

function slice ($array, $start, $end) {
	$new_array = array();

	$size = count($arr);
	for ($i = 0 ; $i < $size ; $i++) {
		if ($i >= $start && $i <= $end) {
			array_push($new_array, $array[$i]);
		}
	}

	return $new_array;
}


function enhanced_slice ($array, $start, $end) {
	$new_array = array();

	for ($i = $start ; $i <= $end ; $i++) {
		array_push($new_array, $array[$i]);
	}
}

?>