<?php

# Constant Folding is replacing floating point expression by result
# replace 22/7 by 3.14
# Less accurate, better performace


# Wrong

function circle_circumference_1 ($diameter) {
	return (22/7) * $diameter;
} 

echo circle_circumference_1(14.2);
echo "<br>";

#####################################################################

# Right

function circle_circumference_2 ($diameter) {
	return 3.14 * $diameter;
} 

echo circle_circumference_2(14.2);
echo "<br>";


?>