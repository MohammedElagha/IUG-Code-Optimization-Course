<?php

# Indexed Array
$arr = array(1, 2, 55, "aa", 51.12);
print_r($arr);
echo "<br>";

################################################

# Associative Array
$ac_arr = array("a" => 2, "bb" => 44, "78" => 5, 15 => 41);
print_r($ac_arr);
echo "<br>";

################################################

# String to Array
$str = "Welcome to IUG. Code Optimization Course,,";
$str_arr = explode(' ', $str);
print_r($str_arr);
echo "<br>";

$arr_of_str = implode(' ', $str_arr);
echo $arr_of_str;
echo "<br>";

################################################

# contains (in_array with values)

if (in_array(55, $arr)) {
	echo "YES";
}
echo "<br>";

if (in_array(44, $ac_arr)) {
	echo "YES";
}
echo "<br>";

if (in_array("bb", $ac_arr)) {
	echo "YES";
}
echo "<br>";

################################################

# Common Operations

# Reverse
print_r (array_reverse($str_arr));
echo "<br>";

# Slice
$num_arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
print_r (array_slice($num_arr, 3));
echo "<br>";
print_r (array_slice($num_arr, 3, 2));	# array, offset, length
echo "<br>";

# Cut/Replace
$in_arr = array(30, 40, 50);
array_splice($num_arr, 2, 4, $in_arr);
print_r ($num_arr);
echo "<br>";

# Push to Indexed
array_push($num_arr, 10);
print_r ($num_arr);
echo "<br>";

# Push to Associative
$ac_arr["new"] = "new ITEM";
print_r ($ac_arr);
echo "<br>";

# Shuffle
shuffle($num_arr);
print_r ($num_arr);
echo "<br>";


?>