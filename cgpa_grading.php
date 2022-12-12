<?php 

# Checking students CGPA using if..elseif...else 

$marks = 99;
$grade = '';


    if ($marks >= 80 && 100){
        $grade = "CGPA 4.00";
    }

    elseif ( $marks >= 75 && 79){
        $grade = "CGPA 3.75";
    }

    elseif ($marks >= 70 && 74){
        $grade = "CGPA 3.50";
    }

    elseif ($marks >= 65 && 69){
        $grade = "CGPA 3.25";
    }

    elseif ($marks >= 60 && 64){
        $grade = "CGPA 3.00";
    }

   elseif ($marks >= 55 && 59){
        $grade = "CGPA 2.75";
    }

    elseif ($marks >= 50 && 54){
        $grade = "CGPA 2.50";
    }

    elseif ($marks >= 45 && 49){
        $grade = "CGPA 2.25";
    }

    elseif ($marks >= 40 && 44){
        $grade = "CGPA 2.00";
    }

    else{
        $grade = "CGPA 0.00";
    }

    echo $grade;



?>

