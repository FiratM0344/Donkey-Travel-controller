<?php
require(__DIR__ . '/header.php');
?>
<body>
    <div id="container">
    <h1>Home</h1><br>
    <div id="content">
<?php
echo "<h2>Hallo ".$_SESSION["username"]."</h2><br>";
?>
<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper at tellus non vulputate. Aenean elementum ipsum at lobortis maximus. Nam tellus lacus, vestibulum quis euismod ultrices, suscipit et purus. Nullam gravida erat at purus dapibus ornare. In sit amet sapien facilisis arcu placerat viverra et sit amet mi. Praesent luctus p</h3>
<a href="/code/test/booking/add" id="button">Boeken</a>
    </div>
    </div>
</body>
</html>

