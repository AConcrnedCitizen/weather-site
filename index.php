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
        
        $conn -> select_db("testsite");
        $sql = "SELECT * FROM temp";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        $temperature = "<td>" . $row[(date("d"))-1] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

        ?>
        
        <div class="grid-container">
            <div class="item1"><img src="./img/BOMB.png" style="width: 45%;"></div>
            <div class="item2"><?=$temperature?></div>
            <div class="item3">MinMax</div>  
            <div class="item4">Humidity</div>
            <div class="item5">Forecast</div>
          </div>
        
        </div>
    </body>
</html>