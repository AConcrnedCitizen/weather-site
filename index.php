<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BOMB</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="grid.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    require_once("config.php");
    require_once("temp.php");
    require_once("humidity.php");
    require_once("mintemp.php");
    require_once("maxtemp.php");
    ?>

    <div class="container">
        <div class="weather-side">
          <div class="weather-gradient"></div>
          <div class="date-container">
            <h2 class="date-dayname">DAY OF WEEK</h2><span class="date-day">DATE</span><i class="location-icon" data-feather="map-pin"></i><span class="location">Canberra, ACT</span>
          </div>
          <div class="weather-container"><i class="weather-icon" data-feather="sun"></i>
            <h1 class="weather-temp"><?= $temperature ?>°</h1>
            <h3 class="weather-desc"><?= $mintemp ?>° | <?= $maxtemp ?>°</h3>
          </div>
        </div>
        <div class="info-side">
          <div class="today-info-container">
            <img src="img/BOMB.png" alt="BOMB" class="today-info-img">
            <div class="today-info">
              <div class="precipitation"> <span class="title">PRECIPITATION</span><span class="value">0 %</span>
                <div class="clear"></div>
              </div>
              <div class="humidity"> <span class="title">HUMIDITY</span><span class="value">34 %</span>
                <div class="clear"></div>
              </div>
              <div class="wind"> <span class="title">WIND</span><span class="value">0 km/h</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <div class="week-container">
            <ul class="week-list">
                <li></i><span class="day-name">Mon</span><span class="day-temp">29°C</span></li>
              <li></i><span class="day-name">Tue</span><span class="day-temp">29°C</span></li>
              <li></i><span class="day-name">Wed</span><span class="day-temp">21°C</span></li>
              <li></i><span class="day-name">Thu</span><span class="day-temp">08°C</span></li>
              <li></i><span class="day-name">Fri</span><span class="day-temp">19°C</span></li>
              <li></i><span class="day-name">Sat</span><span class="day-temp">19°C</span></li>
              <li></i><span class="day-name">Sun</span><span class="day-temp">19°C</span></li>
              <div class="clear"></div>
            </ul>
          </div>
        </div>
      </div>
    </div>
</body>

</html>