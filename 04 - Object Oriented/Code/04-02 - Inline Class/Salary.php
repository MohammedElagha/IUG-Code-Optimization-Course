<?php

class Salary {
	public $hours_no;
	public $hourly_rate;

	public function __construct ($hours_no, $hourly_rate) {
		$this->hours_no = $hours_no;
		$this->hourly_rate = $hourly_rate;
	}

	public function compute_final_salary () {
		return $this->hours_no * $this->hourly_rate;
	}
}

?>