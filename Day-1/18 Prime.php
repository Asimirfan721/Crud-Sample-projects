<?php 
//number divide by 1 and itself;
$num=11;
$isprime=true;

if($num<=1){
    $isprime=false;
}
else{
    for($i=2;$i<=sqrt($num);$i++){
        if($num%$i==0){
            $isprime=false;
            break;
        }
    }
}



?>