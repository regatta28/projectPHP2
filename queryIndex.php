




<?php


include("dbConnection.php");
// include("style.css");

// INSERT QUERY



// $query = "INSERT INTO users (id, email, password, full_name, spending_Amt) VALUES ('NULL', 'boro@ro.es', '00000', 'bobina Bambina','200')";


// $query_check = mysqli_query($connection,$query);

// echo "<br><br>";

// if($query_check){
//     echo "Data has been inserted to the database";
// }else{
//     echo "Data has not gone through";
// }
// mysqli_close($connection);



echo "<br><br>";

// UPDATE QUERY

// $query_update = "UPDATE users SET full_name = 'Bobina Rambina', email = 'bobo@bo.es' WHERE id=9";

// $query_check = mysqli_query($connection,$query_update);

// echo "<br><br>";

// if($query_check){
//     echo "Data has been updated to the database";
// }else{
//     echo "Data has not been updated";
// }
// mysqli_close($connection);


// SELECT QUERY

// $query_select = "SELECT * FROM users";

// $run_query = mysqli_query($connection, $query_select);

// $result = mysqli_fetch_array($run_query, MYSQLI_ASSOC);

// if($result){
//     echo $result['password'];
// }else{
//     echo "Data has not been selected";
// }

// mysqli_close($connection);



// DELETE QUERY

// $query_delete = "DELETE FROM users WHERE id = 9";

// $run_query = mysqli_query($connection, $query_delete);


// if($run_query){
//     echo "Row has been deleted";
// }else{
//     echo "Row remains";
// }

// mysqli_close($connection);

// CHECK USER EXISTS

$email = 'roro@ro.es';
$fullname = 'Robina Bambina';


$query_select = "SELECT * FROM users WHERE email='$email' and full_name='$fullname'";

$run_query = mysqli_query($connection, $query_select);


// LOOP THROUGH EMAIL ADDRESSES

// while($result = mysqli_fetch_assoc($run_query)){
//     echo $result['email']. '<br>';
// };


$result = mysqli_num_rows($run_query);

if($result){
    echo "<span style='color: red;'>The email exists and is</span> ".$email. " and the name of the customer is ". $fullname;
}else{
    echo "Customer is not in the database";
}



mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>



<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Fullname</th>
        <th>Email</th>
        <th>Amount Spent</th>
      </tr>
    </thead>
    <tbody>

    <?php

    include("dbconnection.php");

        $query = "SELECT * FROM users";
        $run_query = mysqli_query($connection, $query);
        
        while($result = mysqli_fetch_assoc($run_query)){

    ?>


      <tr>
        <td><?php echo $result['full_name']?></td>
        <td><?php echo $result['email']?></td>
        <td><?php echo $result['spending_Amt']?></td>
      </tr>

    <?php           
       }
    ?>
      <!-- <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr> -->
    </tbody>
  </table>
</div>

</body>
</html>
