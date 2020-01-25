<?php

class Product {
	public $name;
	public $description;
	public $price;
	public $amount;

	public function __construct ($name, $description, $price, $amount) {
		$this->name = $name;
		$this->description = $description;
		$this->price = $price;
		$this->amount = $amount;
	}
}

?>