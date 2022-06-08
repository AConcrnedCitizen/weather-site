<?php
require("config.php");

function get_tables()
{
    $stuff = "";
  $res = mysqli_query($GLOBALS['conn'],"SHOW TABLES");
  while($cRow = mysqli_fetch_array($res))
  {
      $link = "location.href='./weather.php?loc=".$cRow[0]."'";
      $stuff = $stuff . '<div class="weather-side" onclick="' . $link . '"style="background-image: url(./img/' . $cRow[0] . '.jpg); cursor: pointer;">
      <div class="weather-gradient"></div>
      <div class="date-container">
        <h2 class="date-dayname">' . ucfirst($cRow[0]) .'</span>
      </div>
    </div>';
  }
  return $stuff;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BOMB - Select Location</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="180x180" href="ico\apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="ico\favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="ico\favicon-16x16.png">
  <link rel="manifest" href="ico\site.webmanifest">

  <link rel="stylesheet" href="select.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  

  <script src="https://kit.fontawesome.com/3e5125e16c.js" crossorigin="anonymous"></script>
  
</head>

<body>

  <script>

    setTimeout(function() {
    location.reload();
    }, 100000);

  </script>

  <div class="container">
    <?php echo get_tables() ?>
    
    <h1 style="text-align: center;margin-top: 39%;">Click on the logo, to return to this menu</h1>

</body>

</html>