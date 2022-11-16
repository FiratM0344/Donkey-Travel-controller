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
    <form action="/../code/test/user/login" id="form" method="post">
        <h1 id="loginHeader">Login</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="submit" name="submit">
        <a href='/code/test/user/register' id="reg">Register</a>
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
//     $password = $_POST["password"];
//     $result = $collection->find(["username" => $username, "password" => $password]);
//     foreach($result as $dc) {
//         $dbusername = $dc["username"];
//         $dbpassword = $dc["password"];
//     };
//     if ($password == $dbpassword) {
//         echo "wachtwoorden komen overeen";
//         $login = 1;
//         $_SESSION["login"] = $login;
//         $_SESSION["username"] = $dbusername;
//         header("location: /code/test/home/index");
//     }   else {
//         echo "wachtwoorden komen niet overeen";
//         header("location: /code/test/user/login");
//     }
// }
// 
?>
