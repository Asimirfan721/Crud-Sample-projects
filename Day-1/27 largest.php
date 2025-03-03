<?php 
$arr=[23,45,6,67,8,9,99,100];

for($i=0;$i<count($arr)-1;$i++){
    for($j=0;$j<count($arr)-$i-1;$j++){
        if($arr[$j]<$arr[$j + 1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

echo $arr[0];
