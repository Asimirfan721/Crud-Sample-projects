<?php 
$arr = [4,5,73,56,345,643,34,55];
$larg = $arr[0];
for($i=1;$i<count($arr);$i++){
    if($arr[$i]>$larg){
        $larg=$arr[$i];
    }}
    echo "The largest number in the array is: $larg";
?>