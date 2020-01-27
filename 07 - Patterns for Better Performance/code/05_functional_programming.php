<?php

$sum_op = function ($element1, $element2) { return $element1 + $element2; };
$multiply_op = function ($element1, $element2) { return $element1 * $element2; };

function math ($op, $v1, $v2) {
	return $op($v1, $v2);
}

echo math($sum_op, 5, 2);

/* Resources
https://phptherightway.com/pages/Functional-Programming.html
https://code.tutsplus.com/tutorials/functional-programming-in-php--net-35043
*/

?>