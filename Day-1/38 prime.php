<?php 
$num=8;
$flag=0;
for($i=2;$i<$num;$i++){
    if($num%$i==0){
        $flag=1;
        break;
    }
}
if($flag==0){
    echo "The number is prime";
}
else {echo "The number is not prime";}

?>