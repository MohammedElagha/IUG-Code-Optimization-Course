<?php

class Employee {
	public $name;
	public $phone;
	public $email;
	public $salary;
	public $final_salary;

	public function __construct ($name, $phone, $email, $salary, $final_salary) {
		$this->name = $name;
		$this->phone = $phone;
		$this->email = $email;
		$this->salary = $salary;
		$this->final_salary = $final_salary;
	}
}

?>