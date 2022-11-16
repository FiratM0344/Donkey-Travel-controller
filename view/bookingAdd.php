<?php
require(__DIR__ . '/header.php');
?>
<body>
    <div id="container">
    <h1>Bookings</h1><br>
    <div id="content">
<?php
$today = date("n");
$days = cal_days_in_month(CAL_GREGORIAN, 10,2022);
$i = 0;
while($i < $days){
    echo "<a href='/code/test/booking/store/$i' class='dates'>",$i+1, "</a>";
    $i++;
};
?>
    </div>
    </div>
</body>
</html>

