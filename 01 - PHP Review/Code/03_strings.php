<?php

$str = "Hello World!";

# strlen
echo strlen($str);
echo "<br>";

############################

# word count
echo str_word_count($str);
echo "<br>";

############################

# reverse
echo strrev($str);
echo "<br>";

############################

# contains
echo strpos($str, "World");
echo "<br>";
// echo strpos($str, "not");

if (strpos($str, "World") != false) {
	echo "true";
}

?>