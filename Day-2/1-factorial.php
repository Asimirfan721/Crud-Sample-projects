<?php 
$num=8;
$fact=1;
for($i=1;$i<=$num;$i++){ $fact*=$i;}
   if($fact>5000){
    echo"the factorial is greater than 5000<br>";
    }else{echo"the factorial is less than 5000<br>";
   }
    echo "$fact";

?>