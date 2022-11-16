<?php
session_start();
require(__DIR__ . '/../model/booking.php');

$request = substr($_SERVER['REQUEST_URI'], 1);
$params = explode("/", $request);
$class = $params[2] ?? null; // persons / categories
$action = $params[3] ?? null; // view / add / edit / delete
$id = $params[4] ?? null; //intval($params[4]) ?? null; // both convert to 0
$error = '';
    switch($class) {
        case 'home':
            switch($action) {
                case 'contact':
                    require_once(__DIR__ . '/../view/contact.php');
                    break;
                case 'index':
                    require_once(__DIR__ . '/../view/home.php');
                    break;
            }


        case 'booking':
            switch($action) {
                case 'add': 
                    require_once(__DIR__ . '/../view/bookingAdd.php');
                    break;
                case 'store':
                    require_once(__DIR__ . '/../view/bookingDes.php');
                    break;
                case 'confirmed':
                    $booking = new booking;
                    $booking -> save();
                    require_once(__DIR__ . '/../model/booking.php');
                    break;
                case 'delete':
                    $booking = new booking;
                    $booking -> delete();
                    require_once(__DIR__ . '/../model/booking.php');
                    break;
            }


        case 'user':
            switch($action) {
                case 'login':
                    $user = new user;
                    $user -> login();
                    require_once(__DIR__ . '/../view/user/login.php');
                    break;
                case 'register': 
                    $register =  new user;
                    $register -> register();
                    require_once(__DIR__ . '/../view/user/register.php');
                    break;
                case 'profile':
                    require_once(__DIR__ . '/../view/user/profile.php');
                    break;
                case 'logout':
                    require_once(__DIR__ . '/../view/user/logout.php');
                    break;
            }


        case 'comment':
            switch($action) {
                case 'check': 
                    $comment = new comment;
                    $comment -> comment();
            }
    }
?>