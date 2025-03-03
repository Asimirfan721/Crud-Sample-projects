<?php 
$string="Asim irfan";
$rev=" ";

for($i=strlen($string)-1;$i>=0;$i--){
    $rev.=$string[$i];
}

echo "revered string is: $rev";

?>