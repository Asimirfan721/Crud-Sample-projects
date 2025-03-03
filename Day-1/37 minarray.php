<?php 
$array=array(1,2,3,4,5,6,0.01,8,9,10);
$min=$array[0];
for($i=0;$i<count($array);$i++){
    if($array[$i]<$min){
        $min=$array[$i];
    }
}                        
echo "minimum value is $min";


?>