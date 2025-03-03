<?php 
$String="A quick brown fox jumps over the lazy d ";
$rev="";
for($i=strlen($String)-1;$i>=0;$i--){
    $rev.=$String[$i];
}
echo"$rev";

?>