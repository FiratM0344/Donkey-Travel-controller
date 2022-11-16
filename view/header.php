<?php
if ($_SESSION["login"] != 1 ){
    header("location: ../user/login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/code/test/view/css/style.css">
    <title>DK</title>
</head>
<div id="nav">
        <h2>DonkeyTravel</h2>
        <a href="/code/test/user/profile" id="profile">P</a>
        <a href="/code/test/home/contact" class="buttons">contact</a>
        <a href="/code/test/booking/add" class="buttons">booking</a>
        <a href="/code/test/home/index" class="buttons">home</a>
</div>