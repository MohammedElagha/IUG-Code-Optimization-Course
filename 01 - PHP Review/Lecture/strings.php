<?php

$i = 1;
$v = "Ahmed go to IUG";

var_dump($v);

echo "<br>";

echo strlen($v);
echo "<br>";

$count = 0;
if (strlen($v) > 0) {
	$count = 1;
	for ($i = 0 ; $i < strlen($v) ; $i++) {
		if ($v[$i] == ' ') {
			$count = $count + 1;
		}
	}
}
echo $count;
echo "<br>";

echo str_word_count($v);
echo "<br>";

$rev_str = "";

if (strlen($v) > 0) {
	for ($i = strlen($v)-1 ; $i >= 0 ; $i--) {
		$rev_str = $rev_str . $v[$i];
	}
}
echo $rev_str;
echo "<br>";

echo strrev($v);
echo "<br>";


?>