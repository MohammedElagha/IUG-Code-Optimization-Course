<?php

/*
Any value in condition is TRUE, except FALSE and NULL
Bad performace to use multiple values in comparison in if condition with ==
Use only !== (not !=) FALSE
*/


$arr = array("12", 5, 3.12, true, false, [1,2,3], null);

$size = count($arr);

# Wrong
for ($i = 0 ; $i < $size ; $i++) {
	print($i . ' : ' . ($arr[$i] == true));
	echo "<br>";
}

# Right
for ($i = 0 ; $i < $size ; $i++) {
	print($i . ' : ' . ($arr[$i] !== false && $arr[$i] !== null));
	echo "<br>";
}

?>