<!DOCTYPE html>
<html>
<head>
    <title>signin</title>

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
            background-color: black;
            color: white;
            border: none;
            border-radius: 3px;
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
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "twss";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Login validation
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["email"];
        $password = $_POST["pass"];

        $sql = "select * from validate where email = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
 $_SESSION['pname'] = $_POST["email"];
           header("Location: http://localhost/hr2.php");
        } else {
            // Invalid credentials
            echo "Invalid username or password!";
        }
    }

    $conn->close();
?>
</body>
</html>

