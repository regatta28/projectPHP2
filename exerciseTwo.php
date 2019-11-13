<?php

session_start();

$username = trim($_POST["username"]);

$password = trim($_POST["password"]);

$fullname = trim($_POST["fullname"]);

$email = trim($_POST["email"]);

$age = trim($_POST["age"]);

$address = trim($_POST["address"]);

$customer_complaint = trim($_POST["customer_complaint"]);


// Sanitized and validated variables

$c_username = filter_var($username, FILTER_SANITIZE_STRING);

$c_password = filter_var($password, FILTER_SANITIZE_STRING);

$c_fullname = filter_var($fullname, FILTER_SANITIZE_STRING);

$c_email = filter_var($email, FILTER_VALIDATE_EMAIL);

$c_age = filter_var($age, FILTER_VALIDATE_INT);

$c_address = filter_var($address, FILTER_SANITIZE_STRING);

$c_customer_complaint = filter_var($customer_complaint, FILTER_SANITIZE_STRING);



$_SESSION["dataOfUser"] = array(
    "username" => $c_username,
    "email" => $c_email
);

$all_customers_data = array(
    "username" => $c_username,
    "email" => $c_email,
    "password" => $c_password,
    "Fullname" => $c_fullname,
    "age" => $c_age,
    "comment" => $c_customer_complaint,
    "address" => $c_address

);

echo "Session username is: " .$_SESSION["dataOfUser"]["username"] . "<br> Email is: " . $_SESSION["dataOfUser"]["email"]

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Exercise Two</h3>
    Full Name: <input type="text" name="fullname" class="box"><br><br>
    Username: <input type="text" name="username" class="box"><br><br>
    Email: <input type="text" name="email" class="box"><br><br>
    Password: <input type="text" name="password" placeholder="Enter password" class="box"><br><br>
    Age: <input type="text" name="age" class="box"><br><br>
    Address: <textarea name="address" rows="5" cols="20"></textarea><br><br>
    Customer Complaints: <textarea name="customer_complaint" rows="5" cols="40"></textarea><br><br>
    <input type="submit" class="btn btn-primary">
</form>

<?php

if (empty($c_fullname)) {
    echo "Name is empty";
}else{
    echo "Welcome to your homepage ". $c_fullname;
    echo "<br><br>";
}

if (empty($c_username)) {
    echo "Name is empty";
}else{
    echo "Your Username is ". $c_username;
    echo "<br><br>";
}

if (empty($c_age)) {
    echo "No Age?";
}else{
    echo "You are ". $c_age . " years young";
    echo "<br><br>";
}

if (empty($c_address)) {
    echo "You prefer not to disclose your address";
}else{
    echo "The given address is ". $c_address;
    echo "<br><br>";
}

if (empty($c_customer_complaint)) {
    echo "No comment";
}else{
    echo "You have commented the following: ". $c_customer_complaint;
    echo "<br><br>";
}


function minPassword($c_password){
    $counted_password = strlen($c_password);
    if($counted_password >= 8){
        echo "Your Password is recorded";
    }else{
        echo "You password cannot be less than 8 characters";
    }
}
minPassword($c_password);

echo "<br><br><hr>";

function display_all_customers($all_customers_data){
    echo "Hi Support Team, This query just came in <br><br>";
    foreach($all_customers_data as $customer_data){
        echo $customer_data . "<br>";
    }
}
display_all_customers($all_customers_data);

?>