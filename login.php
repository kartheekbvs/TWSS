<html>
<head>
<title>login form</title>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="fname" placeholder="enter ur first name:">
<br>
<input type="text" name="lname" placeholder="enter ur last name:">
<br>
<input type="text" name="email" placeholder="enter ur email:">
<br>
<input type="text" name="phno" placeholder="enter ur phno:">
<br>
<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);
 $name2 = htmlspecialchars($_POST['lname']);
 $name3 = htmlspecialchars($_POST['email']);
 $name4 = htmlspecialchars($_POST['phno']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
echo $name2;
echo $name3;
echo $name4;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kartheek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO lkg1 (phno,district,state,course	)
VALUES ('$name','$name2','$name3','$name4')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}
?>


</body>
</html>
