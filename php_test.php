<?php
$servername = "localhost";
$username = "demodar";
$password = "andromeda21";
$dbname = "photo_gallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `first_name`, `last_name`, `username` FROM `users` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each r
  while($r = $result->fetch_assoc()) {
    echo "username: " . $r["username"]. " - Name: " . $r["first_name"]. " " . $r["last_name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>