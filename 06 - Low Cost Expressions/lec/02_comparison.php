<?php

$mark = 81;
$grade = '';

if ($mark >= 90) {
	$grade = 'A';
} else if ($mark >= 80) {
	$grade = 'B';
} else if ($mark >= 70) {
	$grade = 'C';
} else if ($mark >= 60) {
	$grade = 'D';
} else {
	$grade = 'F';
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
		# code...
		break;
	case 'B':
		# code...
		break;
	case 'C':
		# code...
		break;
	case 'D':
		# code...
		break;
	case 'F':
		# code...
		break;
}

?>