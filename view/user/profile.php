<?php
require(__DIR__ . '/../header.php');
require('../../code/test/model/mongo.php');
?>
    <h1>profile</h1>
    <?php
        $collection = $client->DonkeyTravel->Users;
        $result = $collection->find(["username" => $_SESSION["username"]]);
        echo "<p class='info'>";
        foreach($result as $dc) {
        };
        echo "Username: ".$dc["username"]."<br>";
        echo "Email: ".$dc["email"]."<br>";
        echo "Phonenumber: ".$dc["phone"]."<br>";
        echo "Bookings: ";
        foreach($dc["bookings"] as $bookings) {
            echo $bookings.", ";
        }
        echo "<br><a href='../user/logout'>Logout</a>";
        echo "</p><br><br>";

        echo "<p class='info'>";
        echo "Bookings: <br>";
        $collection = $client->DonkeyTravel->Users;
        $result = $collection->find(["username" => $_SESSION["username"]]);
        foreach($result as $dc) {
        };
        foreach($dc["bookings"] as $bookings) {
            $collection = $client->DonkeyTravel->Bookings;
            $result = $collection->find(["Bookingnr" => $bookings]);
            foreach($result as $dc) {
                echo $dc["Bookingnr"].", ";
                echo $dc["herberg"].", ";
                echo $dc["Date"].", ";
                echo "<a href='../booking/delete/".$dc["Bookingnr"]."'>Cancel</a>";
                echo "<br>";
            };
        };
        echo "</p>";
    ?>
