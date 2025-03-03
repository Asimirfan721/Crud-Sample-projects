<?php  
$num=7;
$fact=1;
for($i=1;$i<$num;$i++){
    $fact=$fact*$i;
    }
    if($fact>3000){
        echo "The factorial of $num is $fact and it is greater than 3000<br>";
    }
    echo "The fmactorial of $num is $fact";


?>