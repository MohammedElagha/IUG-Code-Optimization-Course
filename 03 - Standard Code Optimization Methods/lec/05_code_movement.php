<?php


$arr = array("a", "b", "c");
$size = count($arr);
for ($i = 0 ; $i < $size ; $i++) {
	echo $arr[$i] . "<br>";
}



$num_arr = array(5, 4, 11, 22, 7, 8, 9);
$max = 0;

foreach ($num_arr as $value) {
	if ($value > $max) {
		$max = $value;
	}
}



$z = 0;
$factor = 2;
for ($i = 0 ; $i < 10 ; $i++) {
	$z = $z + ($factor * $i);
}

echo $factor;

?>