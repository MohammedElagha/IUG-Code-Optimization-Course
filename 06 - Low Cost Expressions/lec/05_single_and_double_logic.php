<?php


$i = 0;
$j = 0;

if ($i < 15 & $j < 15) {

}
if ($i < 15 || $j < 15) {
	
}


while ($i < 15 && $j++ < 15) {
	$i++;
}
echo 'i = ' . $i . "<br>";
echo 'j = ' . $j . "<br>";

$i = 0;
$j = 0;
while ($i < 15 & $j++ < 15) {
	$i++;
	
}
echo 'i = ' . $i . "<br>";
echo 'j = ' . $j . "<br>";


?>