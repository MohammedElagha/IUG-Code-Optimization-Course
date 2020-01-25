<?php


# === better than ==

if (55 == "55") {}	# true
if (55 === "55") {}	# false


#######################################


# if else vs. switch
# if conditions contains > , < prefer to use if else
# if all conditions are = , prefer to use switch
# if_else better than if in all conditions

$mark = 81;
$grade = "";

if ($grade >= 90) {
	$grade = "A";
} else if ($grade >= 80 && $grade < 90) {
	$grade = "B";
} else if ($grade >= 70 && $grade < 80) {
	$grade = "C";
} else if ($grade >= 60 && $grade < 70) {
	$grade = "D";
} else if ($grade < 60) {
	$grade = "F";
}

if ($mark >= 90) {
	$grade = 'A';
} 
if ($mark >= 80 && $mark < 90) {
	$grade = 'B';
} 
if ($mark >= 70 && $mark < 80) {
	$grade = 'C';
} 
if ($mark >= 60 && $mark < 70) {
	$grade = 'D';
} 
if ($mark < 60) {
	$grade = 'F';
}

switch ($grade) {
	case 'A':
		echo "Excellent";
		break;
	case 'B':
		echo "Very Good";
		break;
	case 'C':
		echo "Good";
		break;
	case 'D':
		echo "Acceptable";
		break;
	case 'F':
		echo "Fail";
		break;
}

?>