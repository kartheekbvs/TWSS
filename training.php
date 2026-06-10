<html>
<head>
<title>trainig</title>
<style type="text/css">
.inline-div
{
display: flex;
flex-flow: row nowrap;
justify-content: center;
align-content: center;
align-items: center;
width: 100%;
}
.item
{
   align-self: auto;
   flex: 1 1 auto;
   border: 1px solid black;
   min-hieght: 16px;
   max-hieght: 20px;
   text-align: center;
   background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}
.a
{
text-align: right;
}
</style>
  <script>
    function redirect() {
      var input = document.getElementById("input").value;
     
      if (input === "degree") {
        window.location.href = "degree.php";
      } else if (input === "diploma") {
        window.location.href = "tutorials1.php";
      } else if (input === "engineering") {
        window.location.href = "engineering.php";
      } else {
        alert("Invalid input. Please try again.");
      }
    }
  </script>
</head>
<body>
<div class="inline-div">
 <a class="item" href="http://localhost/hr1.php">home</a>
 <a class="item" href="http://localhost/contactus.php">contact us</a>
 <a class="item" href="http://localhost/about.php">about</a> 
</div>
<div class="a1">
 <marquee style="color: red;">NOTE:course name values are:degree,diploma,engineering</marquee>
</div>
<div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 
  <label for="input">Enter ur course name:</label>
  <input type="text" name="course" id="input">
<br> <br>
 <label>enter ur name:</label>
  <input type="text" name="email" placeholder="enter ur name" required>
<br> <br>
  <button onclick="redirect)">Go</button>
<img src="https://www.geneva.edu/news/2017/10/gc-graphic_11-reasons-why-your-summer-internship-was-totally-worth-it_eddy.jpg" height="600px" width="1500px" alt="image not found"> 
</div>
<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
 $redirectOption = $_POST["course"];
 switch ($redirectOption) {
        case "degree":
 $_SESSION['cname'] = $_POST["email"];
            header("Location: http://localhost/degree.php/");
            break;
         case "diploma":
 $_SESSION['cname'] = $_POST["email"];
            header("Location: tutorials1.php");
            break;
case "engineering":
 $_SESSION['cname'] = $_POST["email"];
            header("Location: engineering.php");
            break;
}
}
?>
</body>
</html>