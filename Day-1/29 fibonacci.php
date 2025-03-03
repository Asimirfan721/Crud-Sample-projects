<?php 
// 0 1 1 2 3 5 8 13 21 34
$num=10;
$a=0;
$b=1;
echo "The fibonacci series for $num number are: $a $b <br>";
for($i=2;$i<=$num;$i++){
    $c=$a+$b;
    echo "$c<br>";
    $a=$b;
    $b=$c;
}


?>