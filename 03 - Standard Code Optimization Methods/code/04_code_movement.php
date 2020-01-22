<?php

# Example 1

# Wrong
$arr = array("a", "b", "c", "d", "e");
for ($i = 0 ; $i < count($arr) ; $i++) {
	# do something
}

# Right
$arr = array("a", "b", "c", "d", "e");
$len = count($arr);
for ($i = 0 ; $len ; $i++) {
	# do something
}

#########################################################


# Example 2

# Wrong
$len = count($arr);
$z = 0;
for ($i = 0 ; $len ; $i++) {
	$x = 3;
	$y = 5;
	$z = $z + ($x * $y);
}

# Right
$len = count($arr);
$x = 3;
$y = 5;
$z = 0;
for ($i = 0 ; $len ; $i++) {
	$z = $z + ($x * $y);
}

?>