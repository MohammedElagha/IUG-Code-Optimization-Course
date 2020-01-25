<?php

class Purchase {
	public $product;
	public $discount;
	public $final_amount;

	public function __construct ($product, $discount) {
		$this->product = $product;
		$this->discount = $discount;
	}

	
}

?>