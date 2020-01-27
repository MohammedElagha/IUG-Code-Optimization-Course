<?php

function math ($op, $v1, $v2) {
	return $op($v1, $v2);
}

$v1 = 2;
$v2 = 5;
$sum = function ($n1, $n2) { return $n1+$n2; }

math ($sum, $v1, $v2);

?>