<?php

# first method: PHP render HTML

$i = 1;

echo "<h3>" . $i++ . "</h3>";
echo "<h3>" . $i++ . "</h3>";
echo "<h3>" . $i++ . "</h3>";
echo "<h3>" . $i++ . "</h3>";
echo "<h3>" . $i++ . "</h3>";

########################################

# Second method: PHP though HTML
$i = 1;
?>

<h3><?php echo $i++; ?></h3>
<h3><?php echo $i++; ?></h3>
<h3><?php echo $i++; ?></h3>
<h3><?php echo $i++; ?></h3>
<h3><?php echo $i++; ?></h3>