<?php  
$String="Asim Irfan ";
$rev="";
for($i=strlen($String)-1;$i>=0;$i--){
    $rev.=$String[$i];
}

echo "$rev";

?>