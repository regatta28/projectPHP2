<?php

session_start();

//include("exerciseOne.php");

/* Loops Foreach Concept : A structure, or process, the end of which is connected to the beginning, in a verb form, it circles*/

// Loops:

$users = array("Fullname" => "Deborah Stand", "Nationality" => "American", "CurrentAddress" => "Ireland", "Age" => 43);

foreach($users as $user){

    echo "$user <br>";
}

/* Functions and Arguments Concept : Besides the built in PHP functions, we can create our own functions.
A function is a block of statements that can be used repeatedly in a program.
A function will not execute immediately when a page loads.
You can pass variables into block of statements - you will need an argument.*/

// function authenticateUser($password,$formPassword){
//     if($password == $formPassword){
//         header("Location: myaccount.php")
//     }
// }
echo "<br><br>";

echo $performanceDate;

//allowedAgeBracket($superFan)

// Super Globals - arrays that keep variables which can be accesed throughout all your application.

// $GLOBALS - makes a declared variable accessible to all your php files

$GLOBALS["fanClub"] = "Jean Wilde";
echo $fanClub;

// $_SESSION - keeps all variables throughout the duration of your applications until destroyed

$_SESSION["user_info"] = array(

    "fullname" => "P.stansta",
    "email" =>    "st@st.com"
);



// $_POST - collect data from forms

// $_GET - is used to collect data from forms through the url

// $_FILES - is used to collect files from forms

// $_SERVER - keeps Paths and hearders














?>
