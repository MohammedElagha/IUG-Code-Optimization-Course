<?php

include_once ('Employee.php');
include_once ('Salary.php');

$salary = new Salary (15, 10);
$employee = new Employee("Ahmed", 9644512, "add@gmai.com", $salary, $salary->compute_final_salary());

$salary_5 = new Salary (12, 12);
$employee_3 = new Employee("Ahmed", 9644512, "add@gmai.com", $salary_5, $salary_5->compute_final_salary());

echo $employee->salary->hours_no;
echo $employee->final_salary;

?>