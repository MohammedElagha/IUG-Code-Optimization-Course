<?php

$string1 = "hello";
$string2 = "hello";

if ($string1 === $string2) {

}

$num_string1 = intval(base_convert(md5($string1), 16, 10));
$num_string2 = intval(base_convert(md5($string2), 16, 10));

if ($num_string1 === $num_string2) {

}

?>