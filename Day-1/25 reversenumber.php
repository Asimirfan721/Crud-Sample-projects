<?php 
$num=6789;
$rev=0;

while($num>0){
 
    $rev= ($rev * 10)+($num%10);
    $num=(int)($num/10);
}
echo "$rev <br>";
?>


<?php 
$num=789876;
$rev=0;
while($num>0){
    $rev= ($rev * 10)+($num%10);
    $num= (int)($num/10);
}
echo "$rev";

?>