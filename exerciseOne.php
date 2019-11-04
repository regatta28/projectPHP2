<?php

session_start();

// Making Variables

$performer = "Kelvin Hart";
$country = "dubai";
$performanceDate = "4th April 2016";




//Associative Array

$AssociativeArrayPerformer = array("Fullname" => "Kelvin Hart", "Height" => "5 Inches", "Age" => "30");

echo $AssociativeArrayPerformer[Height];
echo "<br><br>";

function allowedAgeBracket($superFan){
    $ageMin = 18;
    $ageMax = 49;
    if($superFan >= $ageMin && $superFan <= $ageMax){
        echo "Welcome to the show";
    }elseif($superFan >= 50){
        echo "Super Fan is too old";
    }else{
        echo "Too young";
    }

}

allowedAgeBracket(17);

echo "<br>";


echo "Welcome ". $_SESSION["user_info"]["fullname"];

echo "<br>";

echo "Your email is ". $_SESSION["user_info"]["email"];






?>