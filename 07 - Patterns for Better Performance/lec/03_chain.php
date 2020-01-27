<?php

Class Product {
	private $name;
	private $description;
	private $price;

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

	public function get_price () {
		return $this->price;
	}
}


$product = new Product;
$product->set_name("Coffee")->set_description("Coffee Mate")->set_price(17);

?>