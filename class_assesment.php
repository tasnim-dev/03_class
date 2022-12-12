<?php 

$marks = 80;


    if ($marks >= 80){
        echo "A+";
    }
    elseif ( $marks >= 70){
        echo "A";
    }
    elseif ($marks >= 60){
        echo "A-" ;

    }
    elseif($marks >= 50){
        echo "B";
    }

    elseif ($marks >= 40){
        echo "C";
    }
    elseif ($marks >= 33){
        echo "D";
    }
    else{
        echo "F";
    }


?>