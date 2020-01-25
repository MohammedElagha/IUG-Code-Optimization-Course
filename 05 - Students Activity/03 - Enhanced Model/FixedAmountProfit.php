<?php

class FixedAmountProfit extends Profit {
	public $fixed_amount;

	public function __construct ($fixed_amount) {
		$this->fixed_amount = $fixed_amount;
	}

	public function compute_profit () {
		return $this->fixed_amount;
	}

	public function compute_after_profit () {
		return $this->purchase->final_amount - $this->fixed_amount;
	}
}

?>