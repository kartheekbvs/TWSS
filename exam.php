<!DOCTYPE html>
<html>
<head>
    <title>exam</title>
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
       
        /* Top menu container */
        .top-menu {
            background-color: #f2f2f2;
            padding: 10px;
        }
       
        /* Menu items */
        .top-menu ul {
            list-style-type: none;
            display: flex;
            justify-content: right;
        }
       
        .top-menu li {
            margin: 0 10px;
        }
       
        .top-menu a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
       
        .top-menu a:hover {
            color: #ff6600;
        }
    </style>
 <script>
document.getElementById("input").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
    
    // Perform client-side validation
    if (validateForm()) {
        // If validation passes, submit form data using AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", this.getAttribute("action"), true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                // Handle response from server
                console.log(xhr.responseText);
            }
        };
        xhr.send(formData);
    }
});
    function redirect() {
      var input = document.getElementById("input").value;
     
      if (input === "c") {
        window.location.href = "http://localhost/cex.php/";
      } else if (input === "c++") {
        window.location.href = "http://localhost/c++ex.php/";
      } else if (input === "java") {
        window.location.href = "http://localhost/javaex.php/";
      } else if (input === "dbms") {
        window.location.href = "http://localhost/databaseex.php/";
      } else if (input === "data structures") {
        window.location.href = "http://localhost/datastrex.php/";
      } else if (input === "angular js") {
         window.location.href = "http://localhost/anularex.php/";
       } else if (input === "javascript") {
        window.location.href = "http://localhost/javascriptex.php/";
     } else if (input === "operating system") {
        window.location.href = "http://localhost/operatingex.php/";
     } else if (input === "networking") {
        window.location.href = "http://localhost/networkingex.php/";
     } else if (input === "python") {
        window.location.href = "http://localhost/pythonex.php/";
    } else if (input === "html") {
        window.location.href = "http://localhost/htmlex.php/";
    } else if (input === "css") {
        window.location.href = "http://localhost/cssex.php/";
    } else if (input === "php") {
        window.location.href = "http://localhost/phpex.php/";
}
   
        else {
        alert("Invalid input. Please try again.");
      }
    }
  </script>
</head>
<body>
    <div class="top-menu">

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
           
        </ul>
    </div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">


 <input type="text" name="course" id="input" placeholder="enter ur exam">
<br> 
<input type="text" name="user" placeholder="enter ur name">
<br> <br>
 <button type="submit" onclick ="redirect()">enter</button>
</form> 


<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "twss";
$conn = new mysqli($servername, $username, $password, $dbname);
$loc = $_POST['course'];
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $redirectOption = $_POST["course"];

    // Perform any necessary validation or processing here

    // Redirect based on the value of $redirectOption
    switch ($redirectOption) {
        case "c":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: http://localhost/cex.php/");
            break;
         case "c++":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: c++ex.php");
            break;
case "java":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: javaex.php");
            break;
case "python":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: python.php");
            break;
case "angular js":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: angularex.php");
            break;
case "data structures":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: datastrex.php");
            break;
case "dbms":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: databaseex.php");
            break;
case "html":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: htmlex.php");
            break;
case "css":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: cssex.php");
            break;
case "java script":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: javascriptex.php");
            break;
case "php":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: phpex.php");
            break;
case "networking":
 $_SESSION['cname'] = $_POST["user"];
            header("Location: networkingex.php");
            break;
        default:
            // If no valid option is selected, redirect to a default page
            header("Location: default.php");
            break;
    }
}
?>
</body>
</html>
