<!DOCTYPE html>
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
            background-color: black;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
<style>.container {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding: 10px;
}

.user-info {
  margin-right: 10px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
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
           header("Location: http://localhost/exam.php");
        } else {
            // Invalid credentials
            echo "Invalid username or password!";
        }
    }

    $conn->close();
?>
</body>
</html>

