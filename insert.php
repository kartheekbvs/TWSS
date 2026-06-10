<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "twss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo "connected sucessfully";

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO c ( A )
VALUES ('c','d','a','c','b','a','c','a','c','b')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>