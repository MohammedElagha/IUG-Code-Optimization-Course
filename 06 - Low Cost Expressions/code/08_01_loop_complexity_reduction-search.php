<?php


$arr = [1, 2, 3, 4, 5];

function search_1d ($array, $value) {
	$size = count($array);
	for ($i = 0 ; $i < $size ; $i++) {
		if ($array[$i] === $value) {
			echo "$i";
			return 0;
		}
	}
	echo "NOT FOUND";
}

function binary_search_1d ($array, $value) {
	$size = count($array);

	for ($start_i = 0, $end_i = $size-1 ; $start_i < $size, $end_i >= 0 ; $start_i++, $end_i--) {
		if ($array[$start_i] === $value) {
			echo "$start_i";
			return 0;
		}
		if ($array[$end_i] === $value) {
			echo "$end_i";
			return 0;
		}
	}

	echo "NOT FOUND";
}

search_1d($arr, 3);
echo "<br>";
binary_search_1d($arr, 3);
echo "<br>";


####################################################

$matrix = [[1, 2, 3, 4, 5],
			[11, 22, 33, 44, 55],
			[111, 222, 333, 444, 555]];

function search_2d ($matrix, $value) {
	$outer_size = count($matrix);

	for ($i = 0 ; $i < $outer_size ; $i++) {
		$inner_size = count($matrix[$i]);

		for ($j = 0 ; $j < $inner_size ; $j++) {
			if ($matrix[$i][$j] === $value) {
				echo "$i , $j";
				return 0;
			}
		}
	}

	echo "NOT FOUND";
}


function binary_search_2d ($matrix, $value) {
	$outer_size = count($matrix);

	for ($start_i = 0, $end_i = $outer_size-1 ; $start_i < $outer_size, $end_i >= 0 ; $start_i++, $end_i--) {
		$start_inner_size = count($matrix[$start_i]);
		$end_inner_size = count($matrix[$end_i]);

		for ($start_j = 0, $end_j = $end_inner_size-1 ; $start_j < $start_inner_size, $end_j >= 0 ; $start_j++, $end_j--) {
			if ($matrix[$start_i][$start_j] === $value) {
				echo "$start_i , $start_j";
				return 0;
			}
			if ($matrix[$end_i][$end_j] === $value) {
				echo "$end_i , $end_j";
				return 0;
			}
		}
	}

	echo "NOT FOUND";
}

search_2d($matrix, 55);
echo "<br>";
binary_search_2d($matrix, 55);

?>