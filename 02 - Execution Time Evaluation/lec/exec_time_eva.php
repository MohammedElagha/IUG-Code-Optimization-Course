<?php

$start = microtime(true);

$i = 0;
while ($i < 100000000) {
	$i++;
}

$finish = microtime(true);

$exce_time = $finish - $start;
echo $exce_time;

?>