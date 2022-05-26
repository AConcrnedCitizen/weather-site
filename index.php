<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="grid.css">
    </head>
    <body>
        
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $conn -> select_db("testsite");
        $sql = "SELECT * FROM temp";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row[(date("d"))-1] . "</td>";
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
            <div class="item1"><img src="images\BOMB.png" style="width: 45%;"></div>
            <div class="item2"><h1>Temp</h1></div>
            <div class="item3">Main</div>  
            <div class="item4">Right</div>
            <div class="item5">Footer</div>
            <div class="item6">TESTs</div>
          </div>
        
        </div>
    </body>
</html>