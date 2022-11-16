<?php
require(__DIR__ . '/header.php');
require(__DIR__ . '/../vendor/autoload.php')
?>
<body>
    <div id="container">
    <h1>Contact</h1><br>
        <div id="content">
            <h3>Heb je misschien iets te vertellen?</h3>
            <form action="/../code/test/comment/check" method="post">
                <textarea type="text" name="comment" row="20" cols="40" placeholder="Uw bericht aan ons: "></textarea>
                <input type="submit" value="submit" name="submit" id="button">
            </form>
        </div>
    </div>
</body>
</html>

<?php
// if(isset($_POST["submit"])) {
// $_SESSION["comment"] = $_POST["comment"];
// header("location: /../code/test/comment/check");
// };
?>