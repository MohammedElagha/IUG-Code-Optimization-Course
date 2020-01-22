<?php

include_once ('AcademicEmployee.php');

$salary = new Salary (20, 12);
$acad_emp = new AcademicEmployee("Ahmed", 46541, "email", $salary, "Academic");
$acad_emp->academic_level = "Teacher";

?>