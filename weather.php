<?php
require("config.php");

if (isset($_GET['loc'])) {
  if (mysqli_num_rows(mysqli_query($conn, "SHOW TABLES LIKE '" . strtolower($_GET['loc']) . "';")) > 0) {
    $location = strtolower($_GET['loc']);
  } else {
    $location = "canberra";
  }
} else {
  $location = "canberra";
}

function getIcon()
{
  if ((int) date("G") > 6 && (int) date("G") < 18) {
    echo "fa-solid fa-sun";
  } else {
    echo "fa-solid fa-moon";
  }
}

function getData($date, $var)
{
  $sql = "SELECT * FROM `" . $GLOBALS["location"] . "` WHERE `date`='" . $date . "';";
  $result = mysqli_query($GLOBALS["conn"], $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
      return $row[$var];
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BOMB - <?php echo ucfirst($location); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="180x180" href="ico\apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="ico\favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="ico\favicon-16x16.png">
  <link rel="manifest" href="ico\site.webmanifest">

  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="grid.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">


  <script src="https://kit.fontawesome.com/3e5125e16c.js" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container">
    <div class="weather-side" style="background-image: url('./img/<?php echo $location; ?>.jpg');">
      <div class="weather-gradient"></div>
      <div class="date-container">
        <h2 class="date-dayname"><?= date("l") ?></h2><span class="date-day"><?= date("d M Y") ?></span><i class="location-icon" data-feather="map-pin"></i><span class="location"><?php echo ucfirst($location) ?></span>
      </div>
      <div class="weather-container"><i class="weather-icon" data-feather="sun"></i>
        <h1 class="weather-temp"><span id="temp" class="<?php getIcon() . " " ?>"></span><?php echo (string) (((int) getData(date("j/05/Y"), "minTemp") + (int) getData(date("j/05/Y"), "maxTemp")) / 2); ?>°</h1>

        <h3 class="weather-desc"><?= getData(date("j/05/Y"), "minTemp") ?>° | <?= getData(date("j/05/Y"), "maxTemp") ?>°</h3>
      </div>
    </div>
    <div class="info-side">
      <div class="today-info-container">
        <a href="index.php">
          <img src="img\BOMB.png" class="today-info-img" alt="BOMB LOGO">
        </a>
        <div class="today-info">
          <div class="precipitation"> <span class="title">RAINFALL</span><span class="value"><?= getData(date("j/05/Y"), "rainfall") ?> mm</span>
            <div class="clear"></div>
          </div>
          <div class="humidity"> <span class="title">HUMIDITY</span><span class="value"><?= getData(date("j/05/Y"), "humidity") ?>%</span>
            <div class="clear"></div>
          </div>
          <div class="wind"> <span class="title">WIND</span><span class="value"><?= getData(date("j/05/Y"), "windSpeed") . " km/h " . getData(date("j/05/Y"), "windDirection") ?></span>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="week-container">
        <ul class="week-list">
          <li class="active"></i><span class="day-name"><?= date("D") ?></span><span class="day-temp"><?= getData(date("j/05/Y"), 'minTemp'); ?></span></li>
          <li></i><span class="day-name"><?= date("D", strtotime(' +1 day')) ?></span><span class="day-temp"><?= getData(date("j/05/Y", strtotime(' +1 day')), 'minTemp'); ?>°C</span></li>
          <li></i><span class="day-name"><?= date("D", strtotime(' +2 day')) ?></span><span class="day-temp"><?= getData(date("j/05/Y", strtotime(' +2 day')), 'minTemp'); ?>°C</span></li>
          <li></i><span class="day-name"><?= date("D", strtotime(' +3 day')) ?></span><span class="day-temp"><?= getData(date("j/05/Y", strtotime(' +3 day')), 'minTemp'); ?>°C</span></li>
          <li></i><span class="day-name"><?= date("D", strtotime(' +4 day')) ?></span><span class="day-temp"><?= getData(date("j/05/Y", strtotime(' +4 day')), 'minTemp'); ?>°C</span></li>
          <li></i><span class="day-name"><?= date("D", strtotime(' +5 day')) ?></span><span class="day-temp"><?= getData(date("j/05/Y", strtotime(' +5 day')), 'minTemp'); ?>°C</span></li>
          <li></i><span class="day-name"><?= date("D", strtotime(' +6 day')) ?></span><span class="day-temp"><?= getData(date("j/05/Y", strtotime(' +6 day')), 'minTemp'); ?>°C</span></li>
          <div class="clear"></div>
        </ul>
      </div>
    </div>
  </div>
  </div>
</body>

</html>