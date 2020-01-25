<?php


# Constant Folding

$pi = 22/7;
$pi = 3.14;

#########################

# Constant Propagation

$f = 2.8;

$c1 = $f * 11;
$c2 = $f * 14.1;
$c3 = $f * 78;


##########################

$i = 5;
$j = 11;
$i_j = 5*11;

$v = $i_j - 2;


$price = 50;
$discount = 7;
$shipment = 2;

$price_after_discount = $price - $discount;

$final = $price + $shipment - $discount;
# 50 + 2 - 7 = 45
$final = $price_after_discount + $shipment;
# 50 - 7 + 2 = 45

################################

$arr = array(1, 2, 3, 4, 5);
$size = count($arr);

for ($i = 0 ; $i < $size ; $i++) {

}

?>