<?php

class PercentAmountProfit {
	public $percent_amount;

	public function __construct ($percent_amount) {
		$this->percent_amount = $percent_amount;
	}

	public function compute_profit () {
		return $this->purchase->compute_final_amount() - ($this->purchase->compute_final_amount() * ($this->percent_amount/100));
	}
}

?>