<?php

$product = new Product ("Name", "DESC", 50, 1550);

$purchase_1 = new Purchase ($product, 7);
$profit_1 = new Profit ($purchase_1, "fixed", 2);

?>