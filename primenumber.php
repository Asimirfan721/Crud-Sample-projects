<?php 
$num=29;
$isprime= true;

if($num<=1){
    $isprime=false;
}
else{
    for($i=2;$i <=sqrt($num);$i++){
        if($num % $i ==0){
            $isprime=false;
            break;
        }
    }

}
if($isprime){
    echo"$num is prime";
}
else{
    echo "$num is not a prime";
}

?>