<?php 

#Age_comparision using if...else

    $user_age = 10;
    $status = '';

    if ($user_age >= 18){
        $status = "User can create an account on social media." ;
    }

    else{
        $status = "Not allowed to get registered!";
    }

    echo $status;

?>
