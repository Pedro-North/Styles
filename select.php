<?php

include('dbConfig.php');


// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$results = $mysqli->query("SELECT * FROM teachers123");

if ($results) { 

        while($obj = $results->fetch_object()){
            
    echo $obj->Name . "  ";
    //echo "<br />";
    echo $obj->Age;
    echo "<br />";

        }
  
}


$mysqli->query("UPDATE teachers123 SET name='Steve' WHERE idteachers = 1");


mysqli_close($mysqli);
?>