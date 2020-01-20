<?php

$course = array("id" => "MOBC1145", "name" => "Code optimization");

$grade_1 = array("grade" => 70, "student_id" => 154442);
$grade_2 = array("grade" => 77, "student_id" => 451212);
$grade_3 = array("grade" => 79, "student_id" => 135412);

$grades = array($grade_1, $grade_2, $grade_3);

$final = array("course" => $course, "grades" => $grades);

echo json_encode($final);

?>