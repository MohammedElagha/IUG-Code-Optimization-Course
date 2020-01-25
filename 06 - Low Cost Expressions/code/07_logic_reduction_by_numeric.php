<?php

/*

Logic refers to flow of app by loops and conditions
Logic conditional by characters and string are high-cost
Use numeric values to reduce logic cost

*/


# Wrong

$type = 'PREMIUM';

if ($type == 'NEW') {

} else if ($type == 'FREE') {

} else if ($type == 'PREMIUM') {

} else if ($type == 'EXPIRED') {

}


########################################################


# Right

$type = 3;

if ($type == 1) {
	echo 'NEW';
} else if ($type == 2) {
	echo 'FREE';
} else if ($type == 3) {
	echo 'PREMIUM';
} else if ($type == 4) {
	echo 'EXPIRED';
}

?>