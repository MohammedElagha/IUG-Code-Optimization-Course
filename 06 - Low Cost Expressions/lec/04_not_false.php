<?php


$arr = array(22, 1, true, false, null, "ahmed", "");

if (count($arr)) {

}

foreach ($arr as $key => $value) {
	if ($value) {
		echo $value . ' : TRUE';
	} else {
		echo $value . ' : FALSE';
	}	
	echo "<br>";
}
echo "<br>";
echo "<br>";

foreach ($arr as $key => $value) {
	if ($value !== false) {
		echo $value . ' : TRUE';
	} else {
		echo $value . ' : FALSE';
	}	
	echo "<br>";
}

echo "<br>";
echo "<br>";
echo "---------------------------------";
echo "<br>";

foreach ($arr as $key => $value) {
	$v = 5;
	if (isset($value)) {
		echo $value . ' : TRUE';
	} else {
		echo $value . ' : FALSE';
	}	
	echo "<br>";
}

echo "<br>";
echo "<br>";
echo "---------------------------------";
echo "<br>";

foreach ($arr as $key => $value) {
	$v = 5;
	if (is_null($value)) {
		echo $value . ' : TRUE';
	} else {
		echo $value . ' : FALSE';
	}	
	echo "<br>";
}

echo "<br>";
echo "<br>";
echo "---------------------------------";
echo "<br>";

$acc_arr = array("a" => 1, "b" => 2);
if (isset($acc_arr['c'])) {

}

echo "<br>";
echo "<br>";
echo "---------------------------------";
echo "<br>";

foreach ($arr as $key => $value) {
	if (!empty($value)) {
		echo $value . ' : TRUE';
	} else {
		echo $value . ' : FALSE';
	}	
	echo "<br>";
}

?>