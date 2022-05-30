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
    <div class="page">
        <div class="grid-container">
            <div class="item1"><img src="./img/BOMB.png" style="width: 45%;"></div>
            <div class="item2"><?= $temperature ?>°</div>
            <div class="item3"><?= $mintemp ?>° | <?= $maxtemp ?>°</div>
            <div class="item4">Humidity</div>
            <div class="item5">Tomorrow</div>
            <div class="item6">Day2</div>
            <div class="item7">Day3</div>
            <div class="item8">Day4</div>
            <div class="item9">Day5</div>
        </div>

    </div>
    </div>
</body>

</html>