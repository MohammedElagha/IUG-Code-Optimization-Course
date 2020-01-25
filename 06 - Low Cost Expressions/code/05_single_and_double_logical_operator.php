<?php

/*

- Single && (bitwise AND) : Check all conditions
- Double && (logical AND) : Any first conditions is false, stop checking other conditions
- Single || (bitwise OR) : Check all conditions
- Double || (logical OR) : Any first conditions is true, stop checking other conditions

*/


$v = 15;

if ($v > 0 && $v < 100) {
	echo "TRUE";
}
echo "<br>";
if ($v > 0 & $v < 100) {
	echo "TRUE";
}
echo "<br>";


####################################

# When use of Single be wrong?
# if there is operation in condition

$i = 0;
$j = 0;
while ($i < 15 && $j++ < 15) {
	$i++;
}
echo 'i = ' . $i;
echo "<br>";
echo 'j = ' . $j;
echo "<br>";



$i = 0;
$j = 0;
while ($i < 15 & $j++ < 15) {
	$i++;
}
echo 'i = ' . $i;
echo "<br>";
echo 'j = ' . $j;
echo "<br>";


?>