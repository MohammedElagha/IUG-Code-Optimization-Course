<?php

include_once ('Employee.php');
include_once ('Salary.php');

$salary = new Salary (15, 10);
$employee = new AcademicEmployee("Ahmed", 9644512, "add@gmai.com", $salary, "Academic");

$salary_5 = new Salary (12, 12);
$employee_3 = new AdmistrativeEmployee("Ahmed", 9644512, "add@gmai.com", $salary_5, "Admistrative");


?>