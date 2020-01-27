<?php

# Normal Way

function max_num ($num1, $num2) {
	return ($num1 > $num2) ? $num1 : $num2;
}

$v1 = 5;
$v2 = 8;
$v3 = 3;

echo max_num(max_num($v1, $v2), $v3);


################################################


# Using varargs

function max_num_vars (...$nums) {
	$max = null;

	if (count($nums)) {
		foreach ($nums as $num) {
			if ($num > $max) {
				$max = $num;
			}
		}
	}

	return $max;
}

echo max_num_vars($v1, $v2, $v3);


?>