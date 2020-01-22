<?php

$start = microtime(true);

$i = 0;
while ($i < 100000000) {
	$i++;
}

$finish = microtime(true);

$time = $finish - $start;
echo $time;

?>