<?php

class Employee {
	public $name;
	public $phone;
	public $email;
	public $salary;

	public function __construct ($name, $phone, $email, $salary) {
		$this->name = $name;
		$this->phone = $phone;
		$this->email = $email;
		$this->salary = $salary;
	}
}

?>