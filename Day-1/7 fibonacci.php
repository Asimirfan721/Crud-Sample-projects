<?php 
//0 1 1 2 3 5 8 13 21 34 55 89 144
$num=13;
$a=0;
$b=1;
echo "The fibonicci for 13 numbers are: $a $b";
for($i=2;$i<=$num;$i++){
    $c=$a+$b;
    echo " $c <br>";
    $a=$b;
    $b=$c;
}


?>