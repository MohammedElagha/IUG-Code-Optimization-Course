<?php


function max_num (...$numbers) {
	$max = null;

	$size = count($numbers);
	if ($size) {
		$max = $numbers[0];
		for ($i = 1 ; $i < $size ; $i++) {
			if ($numbers[$i] > $max) {
				$max = $numbers[$i];
			}
		}
	}

	return $max;
}

$v1 = 5;
$v2 = 8;
$v3 = 3;

echo max_num($v1, $v2, $v3);

?>