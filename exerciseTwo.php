<?php

session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //collect value of input field name
    $raw_name = test_input($_GET["fullname"]);
    $raw_email = trim($_GET["email"]);
    $raw_address = test_input($_GET["address"]);
    $raw_comment = test_input($_GET["customercomment"]);
    $raw_age = $_GET["age"];
    $raw_username = $_GET["username"];
    $clean_email = filter_var($raw_email, FILTER_VALIDATE_EMAIL);



}

function minPasswordLen($raw_password){
    if (len($password) > 8){
        echo "Password meets requirements";
    }else{
        echo "Password requires a minimum of 8 characters";
    }
}

$GLOBAL["dataOfUser"] = array(
    "username" => "username",
    "fullname" => "fullname",
    "age" => "age",
    "password" => "password",
    "email" => "email",
    "address" => "address",
    "customercomment" => "customercomment"

);

?>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Exercise Two</h3>
    Full Name: <input type="text" name="fullname" class="box"><br><br>
    Username: <input type="text" name="username" class="box"><br><br>
    Email: <input type="text" name="email" class="box"><br><br>
    Password: <input type="text" name="password" placeholder="Enter password" class="box"><br><br>
    Age: <input type="text" name="age" class="box"><br><br>
    Address: <textarea name="address" rows="5" cols="20"></textarea><br><br>
    Customer Complaints: <textarea name="customercomment" rows="5" cols="40"></textarea><br><br>
    <input type="submit" class="btn btn-primary">
</form>

<?php

if (empty($raw_name)) {
    echo "Name is empty";
}else{
    echo "Welcome to your homepage ". $raw_name;
    echo "<br><br>";
}

if (empty($raw_username)) {
    echo "Name is empty";
}else{
    echo "Your Username is ". $raw_username;
    echo "<br><br>";
}

if (empty($raw_age)) {
    echo "No Age?";
}else{
    echo "You are ". $raw_age . " years young";
    echo "<br><br>";
}

if (empty($raw_address)) {
    echo "You prefer not to disclose your address";
}else{
    echo "The given address is ". $raw_address;
    echo "<br><br>";
}

if (empty($raw_comment)) {
    echo "No comment";
}else{
    echo "You have commented the following ". $raw_comment;
    echo "<br><br>";
}


if (($raw_password || $clean_email)) {
    echo "Your email is ". $clean_email; echo "<br><br>";
    echo "Your password is recorded";
}else{
    echo "Nothing entered";
}


?>