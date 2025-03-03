<?php 
$num=9;
$flag=0;
for($i=2;$i<$num;$i++){
    if($num%$i==0){
        $flag=1;
        break;
    }
}
if($flag==0){
    echo "$num is a prime number";
}
else{
    echo "$num is not a prime number";
}
