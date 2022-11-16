<?php
require_once('mongo.php');

    class user{
        public function login() {
            $this->toLogin();
        }

        private function toLogin() {
            if (isset($_POST["submit"])) {
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
                    header("location: /code/test/home/index");
                }   else {
                    echo "wachtwoorden komen niet overeen";
                    header("location: /code/test/user/login");
                }
        }
    }
    
        public function register() {
            $this->toRegister();
        }

        private function toRegister() {
            if (isset($_POST["submit"])) {
                session_start();
                require 'vendor/autoload.php';
                $client = new MongoDB\Client("mongodb://localhost:27017");
                $collection = $client->DonkeyTravel->Users;
                $username = $_POST["username"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $password = $_POST["password1"];
                $password2 = $_POST["password2"];  
                if ($password != $password2) {
                    header("location: /code/test/user/register");
                }  else {
                    $result = $collection->insertOne(["username" => $username, "email" => $email, "phone" => $phone, "password" => $password, "bookings" => []]);
                    header("location: /code/test/user/login");
                    }
                }
            }
            };

    class booking{
        public function save() {
            $this->toSave();
        }
        
        private function toSave() {
            echo"werkt";
            $herberg = $_POST["herberg"];
            $_SESSION["herberg"] = $herberg;
            $day = $_SESSION["day"];
            $ny = date("-n-y");
            $day .= $ny;
            echo $day, $ny;
            $bn = rand(1234, 9999);
            $username = $_SESSION["username"];
            $client = new MongoDB\Client("mongodb://localhost:27017");
            $collection = $client->DonkeyTravel->Bookings;
            if ($result = $collection->findOne(["Date" => $day, "herberg" => $herberg])) {
                $message = "deze dag is al vol geboekt, kies AUB een andere dag.";
                echo "<script type='text/javascript'>alert('$message');location.replace('/code/test/booking/add')</script>";
                // echo "location.replace('/code/test/booking/add')";
                // header("location:/code/test/booking/add");
            } else {
            $collection = $client->DonkeyTravel->Users;
            $result = $collection->updateOne(['username' => $username], ['$push' => ['bookings' => $bn] ]);
            $collection = $client->DonkeyTravel->Bookings;
            $result = $collection->insertOne(['Bookingnr' => $bn,"herberg" => $herberg, "Date" => $day]);
            // header("location:/code/test/home");
            $message = "Boeking goedgekeurd, totdan!";
            echo "<script type='text/javascript'>alert('$message');location.replace('/code/test/home/index')</script>";
            }}

        public function delete() {
            $this->deleteBooking();
        }

        private function deleteBooking() {
            $request = substr($_SERVER['REQUEST_URI'], 1);
            $params = explode("/", $request);
            $id = (int) $params[4] ?? null; //intval($params[4]) ?? null; // both convert to 0
            echo $id;
            $client = new MongoDB\Client("mongodb://localhost:27017");
            $collection = $client->DonkeyTravel->Bookings;
            $result = $collection->find(array("Bookingnr" => $id));
            foreach ($result as $dc) {
            };
            $bid = $dc["_id"];
            $result = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($bid)]);
            $collection = $client->DonkeyTravel->Users;
            $result = $collection->updateOne(['username' => $_SESSION["username"]], ['$pull' => ["bookings" => ['$in' => [$id]]]]);
            header("location:/code/test/user/profile");
        }
    };

    class comment{
        public function comment(){
            $this->postComment();
        }

        private function postComment() {
                $comment = $_POST["comment"];
                $client = new MongoDB\Client("mongodb://localhost:27017");
                $collection = $client->DonkeyTravel->Comments;
                $result = $collection->insertOne(["username" => $_SESSION["username"], "comment" => $comment]);
                $message = "Comment geplaatst, dankjewel voor de feedback!";
                echo "<script type='text/javascript'>alert('$message');location.replace('/code/test/home/index')</script>";    
                // werken met filter 
        }
    };
?>