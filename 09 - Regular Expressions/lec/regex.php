<?php


$text_1 = 'Mohammed';
$text_2 = 'Mohamed';
$pattern = "/Mohamm?ed/";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found' . "<br>";
}


$text_1 = 'good';
$text_2 = 'gooood';
$pattern = "/goo+d/";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found' . "<br>";
}


$text_1 = 'good';
$text_2 = 'Good';
$pattern = "/[g|G]ood/";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found' . "<br>";
}

$text_1 = 'Welcome new student';
$text_2 = 'hello new student';
$pattern = "/[[W|w]elcome|[H|h]ello] [new|old] student/";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found' . "<br>";
}


$text_1 = 'begin.';
$text_2 = 'began';
$pattern = "/beg.n\./";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found' . "<br>";
}



$text = '1991-02-22';
$pattern = "/[0-9]{4}-[0-9]{2}-[0-9]{2}/";

if (preg_match($pattern, $text, $match)) {
	echo 'Match Found' . "<br>";
}


$text = 'dev@gmail.com';
$pattern = "/.+@.+\..+/";

if (preg_match($pattern, $text, $match)) {
	echo 'Match Found' . "<br>";
}
?>