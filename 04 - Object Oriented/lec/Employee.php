<?php

class Employee {
	public $name;
	public $phone;
	public $email;
	public $salary;
	public $final_salary;
	public $type;

	public function __construct ($name, $phone, $email, $salary, $type) {
		$this->name = $name;
		$this->phone = $phone;
		$this->email = $email;
		$this->salary = $salary;
		$this->final_salary = $this->final_salary();
		$this->type = $type;
	}

	public function final_salary () {
		return $this->salary->hours_no * $this->salary->hourly_rate;
	}

	public function compute_tax () {
		$tax = 0;
		if ($type == "Academic") {
			$tax = $this->final_salary * (0.03);
		} else if ($type == "Adminstrative") {
			$tax = $this->final_salary * (0.01);
		}
		return $tax;
	}
}

?>