<?php

Class Product {
	public $name;
	public $description;
	public $price;

	public function set_name ($name) {
		$this->name = $name;
		return $this;
	}

	public function set_description ($description) {
		$this->description = $description;
		return $this;
	}

	public function set_price ($price) {
		$this->price = $price;
		return $this;
	}
}


$product = new Product;
$product->set_name("Coffee")->set_description("Coffee Mate Good")->set_price(55);

?>