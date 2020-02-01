<?php

# only 1 lowercase Char

$text = 'a';
$pattern = "/[a-z]/";

if (preg_match($pattern, $text, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# only 1 uppercase Char

$text = 'H';
$pattern = "/[A-Z]/";

if (preg_match($pattern, $text, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# only 1 Char

$text = 'g';
$pattern = "/[a-zA-Z]/";

if (preg_match($pattern, $text, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# 4 chars

$text = 'gHYj';
$pattern = "/[a-zA-Z][a-zA-Z][a-zA-Z][a-zA-Z]/";

if (preg_match($pattern, $text, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# 3 numbers, then dash, then 3 chars

$text = '221-AFF';
$pattern = "/[1-9][1-9][1-9]-[a-zA-Z][a-zA-Z][a-zA-Z]/";

if (preg_match($pattern, $text, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# 3 numbers, then dash, then 3 chars

$text = '221-AFF';
$pattern = "/[1-9]{3}-[a-zA-Z]{3}/";

if (preg_match($pattern, $text, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# zero or more previous char

$text_1 = 'Mohammed';
$text_2 = 'Mohamed';
$pattern = "/Mohamm*ed/";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found!' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# one or more previous char

$text_1 = 'Mohammed';
$text_2 = 'Mohamed';
$pattern = "/Mohamm+ed/";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found!' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# any one char

$text_1 = 'begin';
$text_2 = 'begun';
$pattern = "/beg.n/";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found!' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# Start with upper or lower case char

$text_1 = 'Hello';
$text_2 = 'hello';
$pattern = "/[H|h]ello/";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found!' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# Option between two words

$text_1 = 'Hello';
$text_2 = 'Welcome';
$pattern = "/[[H|h]ello|[W|w]elcome]/";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found!' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# one or more any char

$text_1 = 'Hello Ahmed';
$text_2 = 'Hello Ali';
$pattern = "/Hello .+/";

if (preg_match($pattern, $text_1, $match)) {
	echo 'Match Found!' . "<br>";
}
if (preg_match($pattern, $text_2, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# email

$text = 'dev.magha@gmail.com';
$pattern = "/[a-zA-z]+@[a-z]+\.[a-z]+/";

if (preg_match($pattern, $text, $match)) {
	echo 'Match Found!' . "<br>";
}

##################################################

# date

$text = '1991-02-11';
$pattern = "/[0-9]{4}-[0-9]{2}-[0-9]{2}/";

if (preg_match($pattern, $text, $match)) {
	echo 'Match Found!' . "<br>";
}


?>