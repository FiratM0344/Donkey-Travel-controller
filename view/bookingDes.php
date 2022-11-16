<?php
require(__DIR__ . '/header.php');
?>
<body>
    <div id="container">
    <h1>Confirm Booking</h1><br>
    <div id="content">
<h3>De door uw gekozen datum:
<?php
$date = cal_days_in_month(CAL_GREGORIAN, 10,2022);
$my = date("-n-y");
$day = $id+1;
$_SESSION["day"] = $day;
echo $day, $my, "<br><br>";
echo "Naar welke herberg wilt U? ";
?>
<form action="/code/test/booking/confirmed" method="post">
<select name="herberg" required>
    <option value="bomenberg">bomenberg</option>
    <option value="hogehertogen">hogehertogen</option>
    <option value="grotegrotten">grotegrotten</option>
    <option value="waanzinnigeweilanden">waanzinnigeweilanden</option>
</select>
<input type="submit" value="submit" placeholder="submit">
<?php
$date = cal_days_in_month(CAL_GREGORIAN, 10,2022);
$my = date("j-n-Y");
?>
</form>
</h3>
    </div>
    </div>
</body>
</html>

