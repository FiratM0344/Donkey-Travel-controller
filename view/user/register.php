<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/code/test/view/css/style.css">
    <title>DK</title>
</head>
<body id="bg">
    <form action="/../code/test/user/register" id="form" method="post">
        <h1 id="loginHeader">Register</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="number" name="phone" placeholder="Phone Number">
        <input type="password" name="password1" placeholder="password">
        <input type="password" name="password2" placeholder="repeat password">
        <input type="submit" value="submit" name="submit">
        <a href="/code/test/user/login" id="reg">Login</a>
    </form>
</body>
</html>


<?php
// if (isset($_POST["submit"])) {
//     session_start();
//     require 'vendor/autoload.php';
//     $client = new MongoDB\Client("mongodb://localhost:27017");
//     $collection = $client->DonkeyTravel->Users;
//     $username = $_POST["username"];
//     $email = $_POST["email"];
//     $phone = $_POST["phone"];
//     $password = $_POST["password1"];
//     $password2 = $_POST["password2"];  
//     if ($password != $password2) {
//         header("location: /code/test/user/register");
//     }  else {
//         $result = $collection->insertOne(["username" => $username, "email" => $email, "phone" => $phone, "password" => $password, "bookings" => []]);
//         header("location: /code/test/user/login");
//         }
//     };
?>