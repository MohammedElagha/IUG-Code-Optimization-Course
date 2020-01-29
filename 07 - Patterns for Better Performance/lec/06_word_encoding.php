<?php

# Word to Vector

$str = "HelloO";
$str2 = "HelloO";
$num_str = intval(base_convert(md5($str), 16, 10));
$num_str2 = intval(base_convert(md5($str2), 16, 10));

if ($str === $str2) {

}

if ($num_str === $num_str2) {

}

?>