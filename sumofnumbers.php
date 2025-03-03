<?php 
$num=5678;
$sum=0;

while($num>0){
    $sum+= $num % 10;
    $num = (int)($num/10);
}
echo "the sum of echo is: $sum";
?>