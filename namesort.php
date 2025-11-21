<?php
$name = ["IHSAN","SHIFU","AMITHA","UMAR","SIDHU"];
$t = $name;
echo "display using print_r <br> ";
print_r($name);
echo "<br><br>";
echo "sorted in ascending(asort) <br>";
asort($name);
print_r($name);
echo "<br><br>";
echo "sorted in descending(arsort) <br>";
arsort($t);
print_r($t);
?>
