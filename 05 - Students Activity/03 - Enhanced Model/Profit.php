<?php

class Profit {
	public $purchase;
	public $purchase_final_amount;
	public $type;
	public $amount;

	public function __construct ($purchase, $type, $amount) {
		$this->purchase = $purchase;
		$this->purchase_final_amount = $this->compute_final_price();
		$this->type = $type;
		$this->amount = $amount;
	}

	public function compute_profit () {
		if ($type === 'fixed') {
			return $this->amount;
		} else if ($type === 'percent') {
			return $this->purchase_final_amount * $this->amount;
		}
	}

	public function compute_after_profit () {
		$final_amount = $this->purchase_final_amount;
		if ($type === 'fixed') {
			return $final_amount - $this->amount;
		} else if ($type === 'percent') {
			return $final_amount - ($final_amount * $this->amount);
		}
		
	}

	public function compute_final_price () {
		$purchase = $this->purchase;
		$this->purchase_final_amount = $purchase->product->price - $purchase->discount;
	}
}

?>