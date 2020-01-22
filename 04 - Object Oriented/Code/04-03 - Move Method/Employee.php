<?php

class Employee {
	public $name;
	public $phone;
	public $email;
	public $salary;
	public $final_salary;

	public function __construct ($name, $phone, $email, $salary) {
		$this->name = $name;
		$this->phone = $phone;
		$this->email = $email;
		$this->salary = $salary;
		$this->final_salary = $this->compute_final_salary();
	}

	private function compute_final_salary () {
		return $this->salary->hours_no * $this->salary->hourly_rate;
	}
}

?>