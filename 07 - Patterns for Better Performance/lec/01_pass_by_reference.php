<?php

function increase_by_1 (&$array) {
	$size = count($array);

	if ($size) {
		for ($i = 0 ; $i < $size ; $i++) {
			$array[$i] += 1;	# $array[$i] = $array[$i] + 1
		}
	}
}

$arr = array(1, 2, 3, 4, 5);
increase_by_1($arr);
print_r($arr);

?>