<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p style="color: hotpink; font-size: 25px;">This is an html in a php file</p>
</body>
</html>

<script>
alert("This is a Javascript inside the PHP file");
</script>
<?php echo"This is a php tag"?>

<?php

//Everything here becomes PHP for a comment

/*Another comment
another comment 
multiple line comment*/

echo "This is a PHP text";

echo 45;

echo "<p>This is an HTML paragraph</p>";

?>
<?php
/*What are variables
Values = Text/String or <numberor int*/ 
$name =     "Rebecca";
$age =      32;
$country =  Ireland;
$password = '1234';
$minLenofPassword = 4;

if(strlen($password) < $minLenofPassword){
    echo "Your Password does not meet the length requirement";
}else{
    echo "Your name is " . $name . ",your password meets the requirements, you are from " . $country . " and you are " . $age .
" years old.";
}

$win = 1;
$logged_in = 1;
$age = 41;

//If I win I will buy a car and if not I will ride my bike.

if($win == 1){
   echo "I will buy a car"; 
}else{
    echo "I will get on my bike";
}

//If User below is logged in then redirect to account.php and if not show login form

if($logged_in == 1){
    //header("Location: account.php");
    echo "Success";
}else{
    include ('login.php');
}

//If age is between 25 and 40 then you can play.

if($age >= 25 && $age <= 40){
    echo "Welcome";
}elseif ($age > 40) {
    echo "You are too old to play!";
}else{
    echo "You are too young to play";
}

//Array holds multiple values in a variable

$users = array("Rebecca", "Ireland", "32");


echo $users[0];

// Associative Array

$users = array("fullname" => "Rebecca", "country" => "Ireland", "age" => "32");

echo $users[country];










