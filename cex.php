<html>
<head>
<?php
SESSION_START();
if(!isset($_SESSION["cname"])) {
exit();
}
$username=$_SESSION["cname"];
?>
<title>c</title>
<style>

None selected

Skip to content
Using Gmail with screen readers
Enable desktop notifications for Gmail.
   OK  No, thanks
Conversations
0.73 GB of 15 GB used
Terms · Privacy · Programme Policies
Last account activity: 14 hours ago
Details
/* CSS styles */
.login-container {
    width: 300px;
    margin: 0 auto;
    margin-top: 100px;
    text-align: center;
}

.login-container form {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
}

.login-container input {
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
    box-sizing: border-box;
}

.login-container button {
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.welcome-container {
    text-align: left;
    margin-top: 90px;
}
</style>
<style>
.a1 {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
    font-family: Garamond;
}
</style>
<style> 
.mar
{
color: red;
font-size: 22px;
}
</style>
<style>
form {
    background-color: ;
    color: ;
    padding: 20px;
    text-align: center;
}
</style>
<style>
.score-container {
    position: absolute;
    left: 20px; /* Adjust this value as needed */
    top: 50%; /* Adjust this value as needed */
    transform: translateY(-50%);
    font-family: georgia;
}
</style>
<script>
function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  setInterval(function () {
    minutes = parseInt(timer / 60, 10);
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = minutes + ":" + seconds;

    if (--timer < 0) {
      timer = 0;
      document.getElementById("examForm").submit();
    }
  }, 1000);
}

window.onload = function () {
  var fiveMinutes = 60 * 5,
    display = document.querySelector('#timer');
  startTimer(fiveMinutes, display);
};
</script>
<style>
.container {
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
body {
  font-family: Arial, sans-serif;
}

.timer-container {
  text-align: right;
}

#timer {
  font-size: 2em;
  margin-bottom: 20px;
}

#submitBtn {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}
</style>
</head>
<body>
<div class="welcome-container">
 <h4>WELCOME,<?php echo $username; ?>!</h4>
  </div>
<div class="a1">
<h1>C exam</h1>
<div class="mar">
<marquee direction="left">Note:students are kindly reqested to complete the exam before time if not completed it will automatically sumited</marquee>
</div>
</div>
<div class="container">
  <div class="user-info">
    <!-- Display user details here -->
    
  </div>
  <div class="dropdown">
    <button class="dropbtn">Logout</button>
    <div class="dropdown-content">
      <a href="http://localhost/validate2.php">Logout</a>
    </div>
  </div>
</div>
<div class="timer-container">
  <div id="timer">05:00</div>
<form id="examForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label><h3>ENTER UR NAME</h3></label>
<input type="text" name="user" placeholder="enter ur name">
<br> <br>
<label>1. Who is the father of C language?</label>
<br>
<select name="answer1">
 <option value="a1">select</option>
    <option value="a">  a) Steve Jobs</option>
    <option value="b"> b) James Gosling</option>
    <option value="c"> c) Dennis Ritchie</option>
    <option value="d"> d) Rasmus Lerdorf</option>

</select>
<br>
<label>2. Which of the following is not a valid C variable name?</label>
<br>
<select name="answer2">
 <option value="a2">select</option>
    <option value="a"> a) int number;</option>
    <option value="b"> b) float rate;</option>
   <option value="c"> c)int variable_count;</option>
    <option value="d">d) int $main;</option>
</select>
<br>
<label>3. All keywords in C are in ____________</label>
<br>
<select name="answer3">
 <option value="a3">select</option>
   <option value="a"> a) LowerCase letters</option>
  <option value="b">  b) UpperCase letters</option>
   <option value="c"> c) CamelCase letters</option>
  <option value="d">  d) None of the mentioned</option>

</select>
<br>
<label>4. Which of the following is true for variable names in C?</label>
<br>
<select name="answer4">
 <option value="a4">select</option>
   <option value="a"> a) They can contain alphanumeric characters as well as special characters</option>
    <option value="b">b) It is not an error to declare a variable to be one of the keywords(like goto, static)</option>
    <option value="c">c) Variable names cannot start with a digit</option>
   <option value="d"> d) Variable can be of any length</option>
</select>
<br>
<label>5. Which is valid C expression?<label>
<br>
<select name="answer5">
 <option value="a5">select</option>
  <option value="a"> a) int my_num = 100,000;</option>
  <option value="b"> b) int my_num = 100000;</option>
  <option value="c"> c) int my num = 1000;</option>
  <option value="d"> d) int $my_num = 10000;</option>
</select>
<br>
<label>6. Which of the following cannot be a variable name in C?</label>
<br>
<select name="answer6">
 <option value="a6">select</option>
  <option value="a"> a) volatile</option>
  <option value="b"> b) true</option>
   <option value="c">c) friend</option>
 <option value="d"> d) export</option>
</select>
<br>
<label>7. What is short int in C programming?</label>
<br>
<select name="answer7">
 <option value="a7">select</option>
  <option value="a">  a) The basic data type of C</option>
   <option value="b"> b)Qualifier</option>
   <option value="c"> c) Short is the qualifier and int is the basic data type</option>
   <option value="d"> d) All of the mentioned</option>

</select>
<br>
<label>8. Which of the following declaration is not supported by C language?</label>
<br>
<select name="answer8">
 <option value="a8">select</option>
  <option value="a"> a) String str;</option>
  <option value="b"> b) char *str;</option>
  <option value="c"> c) float str = 3e2;</option>
  <option value="d"> d) Both “String str;” and “float str = 3e2;”</option>

</select>
<br>
<label>9. Which keyword is used to prevent any changes in the variable within a C program?</label>
<br>
<select name="answer9">
 <option value="a9">select</option>
  <option value="a"> a) immutable</option>
  <option value="b"> b) mutable</option>
  <option value="c"> c) const</option>
   <option value="d">d) volatile</option>
</select>
<br>
<label>10. What is the result of logical or relational expression in C?<label>
<br>
<select name="answer10">
 <option value="a10">select</option>
 <option value="a"> a) True or False</option>
 <option value="b"> b) 0 or 1</option>
 <option value="c"> c) 0 if an expression is false and any positive number if an expression is true</option>
  <option value="d">d) None of the mentioned</option>
</select>
<br>
<button type="submit" id="submitBtn">submit</button>
</form>
</div>
<div class="score-container">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "twss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT choice FROM c";
$result = $conn->query($sql);
 $name = htmlspecialchars($_POST['answer1']);
$name1 = htmlspecialchars($_POST['answer2']);
$name2 = htmlspecialchars($_POST['answer3']);
$name3 = htmlspecialchars($_POST['answer4']);
$name4 = htmlspecialchars($_POST['answer5']);
$name5 = htmlspecialchars($_POST['answer6']);
$name6 = htmlspecialchars($_POST['answer7']);
$name7 = htmlspecialchars($_POST['answer8']);
$name8 = htmlspecialchars($_POST['answer9']);
$name9 = htmlspecialchars($_POST['answer10']);

echo  $name;
echo  $name1;
echo  $name2;
echo  $name3;
echo  $name4;
echo  $name5;
echo  $name6;
echo  $name7;
echo  $name8;
echo  $name9. PHP_EOL;
$user_answers = array();
for ($i = 1; $i <= 10; $i++) {
    // Assuming the form field names are answer1, answer2, ..., answer10
    $answer_key = 'answer' . $i;
    if (isset($_POST[$answer_key])) {
        $user_answers[] = $_POST[$answer_key];
    } else {
        $user_answers[] = ""; // Handle case where answer is not submitted
    }
}
 
  if ($result->num_rows > 0) {
    $correct_answers = array();
    // Storing correct answers in an array
    while($row = $result->fetch_assoc()) {
        $correct_answers[] = $row['choice'];
    }
    
    // Calculating the score
    $score = 0;
    for ($i = 0; $i < count($user_answers); $i++) {
        if ($user_answers[$i] == $correct_answers[$i]) {
            $score++;
        }
    }
    
    // Outputting the score
    echo "Score: " . $score;
} else {
    echo "0 results";
}

   $name = htmlspecialchars($_POST['user']);
    
    // Prepare and execute an SQL statement to insert data into your database
$sql1="INSERT INTO marks (name,c) values('$name','$score' )";

   
if ($conn->query($sql1) === TRUE) {
  echo "<script>alert('exam details submited sucessfully');</script>";
} else {
 
}
}
?>
</diV>
</body>
</html>