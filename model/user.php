<?php
    Class user {        
        private function login() {
                session_start();
                require 'vendor/autoload.php';
                $client = new MongoDB\Client("mongodb://localhost:27017");
                $collection = $client->DonkeyTravel->Users;
                $username = $_POST["username"];
                $password = $_POST["password"];
                $result = $collection->find(["username" => $username, "password" => $password]);
                foreach($result as $dc) {
                    $dbusername = $dc["username"];
                    $dbpassword = $dc["password"];
                };
                if ($password == $dbpassword) {
                    echo "wachtwoorden komen overeen";
                    $login = 1;
                    $_SESSION["login"] = $login;
                    $_SESSION["username"] = $dbusername;
                    header("location: index.php");
                }   else {
                    echo "wachtwoorden komen niet overeen";
                    header("location: loginform.php");
                }
            }
        }
?>