<html>
<head>
<title>internship</title>
<style type="text/css">
.inline-div
{
display: flex;

justify-content: left;
align-content: center;
align-items: center;
 margin: 0 10px;
width: 50%;
}
.item
{
   align-self: auto;
   flex: 1 1 auto;
   border: 1px solid black;
   min-hieght: 16px;
   max-hieght: 20px;
   text-align: left;
}
</style>
<style>
section {
    margin-bottom: 20px;
}

h2 {
    color: #333;
}

ul {
    list-style-type: none;
    padding: 0;
}

form {
    display: grid;
    gap: 10px;
}

label {
    font-weight: bold;
}

input,
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}
</style>
</head>
<body>
<div class="inline-div">
<ul>
<li> <a class="item" href="http://localhost/hr1.php">home</a></li>
</ul>
</div> 
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label>enter ur first name:</label>
  <input type="text" name="fname" placeholder="enter ur first name">
<br> <br>
 <label>enter ur last name:</label>
  <input type="text"  name="lname" placeholder="enter ur last name">
<br> <br>
 <label>enter ur phno:</label>
  <input type="text"  name="phno" placeholder="enter ur phno" maxlength="10">
<br> <br>
 <label>enter ur emailid:</label>
  <input type="email" name="email" placeholder="enter ur email">
<br> <br>
<button type="submit">sendus</button>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);
 $name2 = htmlspecialchars($_POST['lname']);
 $name3 = htmlspecialchars($_POST['phno']);
 $name4 = htmlspecialchars($_POST['email']);
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
$dbname = "twss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (firstname,lastname,phno,email )
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