<?php

$conn -> select_db("testsite");
$sql = "SELECT * FROM windspeed";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                $windspeed = "<td>" . $row[(date("d"))-1] . "</td>";
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


$sql = "SELECT * FROM winddir";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                $winddir = "<td>" . $row[(date("d"))-1] . "</td>";
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