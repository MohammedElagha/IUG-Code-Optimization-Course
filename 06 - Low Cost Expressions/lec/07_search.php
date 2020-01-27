<?php


$arr = array(1, 2, 3, 4, 5);

function search ($array, $value) {
	$size = count($array);
	if ($size) {
		for ($i = 0, $j=$size-1 ; $i < $size, $j>=0 ; $i++, $j--) {
			if ($array[$i] == $value) {
				return $i;
			}
			 else if ($array[$j] == $value) {
				return $j;
			}
		}
	}
	return -1;
}

echo search($arr, 5);


?>