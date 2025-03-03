    <?php  
    $String = "Asim";
    $rev="";

    for($i=strlen($String)-1;$i>=0;$i--){
        $rev=$rev.$String[$i];
    }
    echo "$rev <br>";
    ?>


    <?php  

    $String="This is reverse";
    $rev="";
    for($i=strlen($String)-1;$i>=0;$i--){
        $rev=$rev.$String[$i];
    }
    echo "$rev <br>";



    ?>


    <?php
    $String ="That will be also reverse";
    $rev="";
    for($i=strlen($String)-1;$i>=0;$i--){
        $rev=$rev.$String[$i];
    }
    echo "$rev <br>";


    ?>