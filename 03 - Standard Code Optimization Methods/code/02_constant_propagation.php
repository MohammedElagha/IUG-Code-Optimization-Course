<?php

# Constant Propagation means to define repeated value in code as variable, to reduce memory allocation and value call


# Wrong

$salary_1_after_tax = 3000 - ((13/100) * 3000);
$salary_2_after_tax = 2400 - ((13/100) * 2400);
$salary_3_after_tax = 6700 - ((13/100) * 6700);
$salary_4_after_tax = 1544 - ((13/100) * 1544);
$salary_5_after_tax = 4500 - ((13/100) * 4500);


######################################################

# Right

$tax_percent = 0.13;	# not 13/100 applying Constant Folding

$salary_11_after_tax = 3000 - ($tax_percent * 3000);
$salary_22_after_tax = 2400 - ($tax_percent * 2400);
$salary_33_after_tax = 6700 - ($tax_percent * 6700);
$salary_44_after_tax = 1544 - ($tax_percent * 1544);
$salary_55_after_tax = 4500 - ($tax_percent * 4500);

?>