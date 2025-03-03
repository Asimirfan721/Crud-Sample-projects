<?php 
$num=5;
$a=0;
$b=1;
echo "The fibonacci series upto $num is: $a  $b  ";
      for($i=2;$i<=$num;$i++){
        $c=$a+$b;
        echo " $c";
        $a=$b;
        $b=$c;}
?>