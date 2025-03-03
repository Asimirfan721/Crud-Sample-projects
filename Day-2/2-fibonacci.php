<?php 
// 0 1 1 2 3 5 8 13 21 34 55 89 144
$num=7;
$a=0;
$b=1;
echo "$a $b ";
for($i=2;$i<=$num;$i++){
    $c=$a+$b;
    echo "$c ";
    $a=$b;
    $b=$c;
}


?>