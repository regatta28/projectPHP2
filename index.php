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

echo "<br><br>";

?>






<!-- <form method="post" action="forms.php">
<h3>Form with Post method</h3>
    Name: <input type="text" name="fullname">
    Email: <input type="text" name="email">

    <input type="submit" class="btn btn-primary">
</form> -->

<br><br>
<link rel="stylesheet" href="style.css" type="text/css">

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Form with Get method and using validating methods</h3>
    Name: <input type="text" name="fullname"   class="box"><br><br>
    Email: <input type="text" name="email" class="box"><br><br>
    Password: <input type="text" name="password" placeholder="Enter password" class="box"><br><br>
    Gender : <br><input type="radio" name="gender" value="female" class="box">Female<br><br>
    <input type="radio" name="gender" value="male" class="box">Male<br><br>
    <input type="submit" class="btn btn-primary">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //collect value of input field name

    $name = $_GET["fullname"];
    $raw_password = $_GET["password"];
    $raw_email = trim($_GET["email"]);
    $gender = $_GET["gender"];
    $clean_email = filter_var($raw_email, FILTER_VALIDATE_EMAIL);

    if (empty($name)) {
        echo "Name is empty";
    }else{
        echo "Your name is ". $name;
        echo "<br><br>";
        echo "You are " .$gender;
        echo "<br><br>";
    }
    if (($raw_password || $clean_email)) {
        echo "Your email is ". $clean_email; echo "<br><br>";
        echo "Your password is recorded";
    }else{
        echo "Nothing entered";
    }
}


?>















