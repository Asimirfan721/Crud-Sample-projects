<?php 
$arr= [1,2,3,4,5,6,7];
$rev=[];
for($i=count($arr)-1;$i>=0;$i--){
    $rev[]=$arr[$i];
} 
echo implode(", ", $rev) . "<br>";
?>



<?php
$arr=[9,7,5,3,1];
$rev=[];
for($i=count($arr)-1;$i>=0;$i--){
    $rev[]=$arr[$i];
};
echo implode(", ", $rev) . "<br>";

?>