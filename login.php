<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $city = $_POST['city'];
    }

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'login_db';

    //For connection 
    $connection = mysqli_connect($host , $user ,$pass ,$dbname);

    $sql = "INSERT INTO student(name,email,mobile,city) value ('$name','$email','$mobile','$city')";

    mysqli_query($connection,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login Form</title>
</head>
<body>
    <form action="#" method="POST">
        Name : <input type="text" name="name" placeholder="Enter Your Name"> <br><br>
        Email : <input type="text" name="email" placeholder="Enter Your Email"><br><br>
        Mobile : <input type="text" name="mobile" placeholder="Enter Phone Number"><br><br>
        City : <input type="text" name="city" placeholder="Enter Your City Name"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>