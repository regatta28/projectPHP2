

<?php

$server = "localhost";
$username = "root";
$password = "password";
$database = "first_TestDB";

$connection = mysqli_connect($server, $username, $password, $database);

// if($connection){
//     echo "Database connection was successful";
// }else{
//     echo "Connection was not successful" . mysqli_error($connection);
//     die($connection);
// }









try {
    $connection = mysqli_connect($server, $username, $password, $database);
    if($connection){
        echo "Database connection was successful";
    }
} catch(Exception $errormsg){
    echo $errormsg->getMessage();
}







?>