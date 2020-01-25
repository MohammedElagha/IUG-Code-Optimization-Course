<?php

# isset: Determine if a variable is set and is not NULL
# returns true only when the variable is not null

$v1 = 55;
$v2 = "";
$v3 = 0;
$v4 = "0";
$v5 = null;

echo 'v1 : ' . isset($v1) . "<br>";
echo 'v2 : ' . isset($v2) . "<br>";
echo 'v3 : ' . isset($v3) . "<br>";
echo 'v4 : ' . isset($v4) . "<br>";
echo 'v5 : ' . isset($v5) . "<br>";
echo 'v6 : ' . isset($v6) . "<br>";

# isset used with check key in array
$arr = array("a" => 1, "b" => 22);
if (isset($arr['c'])) {

}


###########################################################


# is_null: Finds whether a variable is NULL
# returns true only when the variable is null
# is_null() only to declared variables

echo 'v1 : ' . is_null($v1) . "<br>";
echo 'v2 : ' . is_null($v2) . "<br>";
echo 'v3 : ' . is_null($v3) . "<br>";
echo 'v4 : ' . is_null($v4) . "<br>";
echo 'v5 : ' . is_null($v5) . "<br>";
echo 'v6 : ' . is_null($v6) . "<br>";


###########################################################


# empty: Determine whether a variable is empty
# return true if the variable is an empty string, false, array(), NULL, “0?, 0, and an unset variable.

echo 'v1 : ' . empty($v1) . "<br>";
echo 'v2 : ' . empty($v2) . "<br>";
echo 'v3 : ' . empty($v3) . "<br>";
echo 'v4 : ' . empty($v4) . "<br>";
echo 'v5 : ' . empty($v5) . "<br>";
echo 'v6 : ' . empty($v6) . "<br>";


###########################################################

# isset more robust than is_null
# is_null better performace than isset
# best robust solution is empty()

?>