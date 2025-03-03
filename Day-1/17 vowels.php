<?php 
//count the number of vowels in a string
$String="HEy this is a string where A and E are vowels";
$count=0;
$vowels=array('a','e','i','o','u','A','E','I','O','U'); //array of vowels
for($i=0;$i<strlen($String);$i++){
    if(in_array($String[$i], $vowels)){
        $count++; 
    }
}


echo "The number of vowels in the string is: $count<br>";
?>


<?php 
$String="This is a string with vowels where this programme will count number of vowels";
$vowels=array('a','e','i','o','u','A','E','I','O','U');
$count=0;

for($i=0;$i<strlen($String);$i++){
    if(in_array($String[$i],$vowels)){
        $count++;

    }
}

echo "The total number of vowels are $count";


?>



<?php  
$String= 'a, e,i, o, u';
$vowels=array('a','e','i','o','u','A','E','I','O','U');
$count=0;

for($i=0;$i<strlen($String);$i++){
    if(in_array($String[$i],$vowels)){
        $count++;
    }
}
echo "The number of vowels in the string is: $count<br>";


?>