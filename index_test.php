<?php

$con=mysqli_connect("127.0.0.1","pedro1","asdasd","pedro");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM teachers123");

while($row = mysqli_fetch_array($result)) {
  echo $row['Name'];
echo "<br>";	
}


$con->query("SELECT * FROM Teachers");
mysqli_close($con);

?>


