<?php

$v1 = 55;
$v2 = 13;
$v3 = 47.1;

$v21 = 55;
$v22 = 13;
$v23 = 47.1;

$arr = array($v1, $v2, $v3);
print_r ($arr);
echo "<br>";

$associative_array = array(3.21 => $v1, "b" => $v2, "c" => false);
print_r ($associative_array);
echo "<br>";

echo true;
echo "<br>";

array_push($arr, 78);
print_r ($arr);
echo "<br>";

$associative_array["new_key"] = "77844";
print_r ($associative_array);
echo "<br>";

// $arr = array_reverse($arr);
// print_r ($arr);
// echo "<br>";

foreach ($arr as $value) {
	if ($value == 55) {
		echo "TRUE";
		break;
	}
}

// if (in_array($arr, 55)) {

// }

echo "<br>";

$start = 1;
$end = count($arr) - 2;
$new_arr = array();

$size = count($arr)-1;
for ($i = $start ; $i <= $end ; $i++) {
	array_push($new_arr, $arr[$i]);
}
print_r($new_arr);
echo "<br>";

$new_array = array_slice($arr, $start, $end);
?>