<html>
<head>
    <title>validation</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
       
        .login-form {
            width: 300px;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
       
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
       
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
<style>
.password-container
{
position: relative;
margin-bottom: 20px;
}
.password-toggle
{
position: absolute;
top: 50%;
right: 10px;
transform: translateY(-50%);
cursor: pointer;
}
</style>
<script>
function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var toggleIcon = document.getElementById("togglePassword");
  
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleIcon.textContent = "👁️";
  } else {
    passwordInput.type = "password";
    toggleIcon.textContent = "🔒";
  }
}
</script>
<script>
function login()
{
 window.location.href = 'http://localhost/hr1.php/';
}
</script>
 </head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" id="email" name="email" placeholder="Username" required>
            <div class="password-container">
            <input type="password" name="pass" id="password" placeholder="Password" required>
<span id="togglePassword" onclick="togglePasswordVisibility()" class="password-toggle">👁️</span>
</div>
      <button type="submit" onclick="login()">Login</button>
        </form>
    </div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['email']);
 $name2 = htmlspecialchars($_POST['pass']);
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

$sql = "INSERT INTO validate (email,password)
VALUES ('$name','$name2')";

 if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}
?>
</body>
</html>