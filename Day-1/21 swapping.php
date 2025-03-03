<?php 
$a=8;
$b=9;
echo "Before swap $a and $b";

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo "After swap $a and $b";    
?>