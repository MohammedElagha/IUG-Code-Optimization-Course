<?php

$arr = array(1, 2, 3, 4, 5, 6, 7);

$start = 2;
$end = 5;

$sliced_array = array();
$size = count($arr);

for ($i = 0 ; $i < $size ; $i++) {
	if ($i >= $start && $i <= $end) {
		array_push($sliced_array, $arr[$i]);
	}
}

for ($i = $start ; $i <= $end ; $i++) {
	array_push($sliced_array, $arr[$i]);
}

?>