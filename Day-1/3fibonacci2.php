<?php 
# 0 1 1 2 3 5 8 13, 21

$num=5;
$a=0;
$b=1;
echo "The fibonaccci serioes is upto $num is: $a $b";
for($i=2;$i<$num;$i++){
    $c=$a+$b;
    echo "$c";
    $a=$b;
    $b=$c;
}




?>