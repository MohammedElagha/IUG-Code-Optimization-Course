<?php

include_once ('Salary.php');
include_once ('Employee.php');

class AcademicEmployee extends Employee {
	public $academic_level;

	public function compute_tax () {
		return $this->salary->hours_no * $this->salary->hourly_rate * 0.03;
	}
}

?>