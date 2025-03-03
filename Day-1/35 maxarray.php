<?php 
$a=[44,56,77,88,66,43,32];

$maxValue = $a[0];
for($i=1; $i<count($a); $i++){
    if($a[$i] > $maxValue){
        $maxValue = $a[$i];
    }
}
echo $maxValue;
echo "<br>";


?>