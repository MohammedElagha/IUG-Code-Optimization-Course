<?php

# Common Sub-Expression Elimination refers to don't repeat expression in code, and use prevoiusly ready expression


# Wrong

$price = 50;
$shipment_cost = 1.44;
$discount = 7;
$price_after_discount = 50 - 7;
$final_price = (50 - 7) + 1.44;


#####################################################


#Right

$price = 50;
$shipment_cost = 1.44;
$discount = 7;
$price_after_discount = 50 - 7;
$final_price = $price_after_discount + 1.44;


?>