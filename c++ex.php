<html>
<head>
<title>c++exam</title>
<style>
.a1 {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
    font-family: Garamond;
} 
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
</head>
<body>
<div class="a1">
<h1>C++ exam</h1>
<div class="mar">
<marquee direction="left">Note:students are kindly reqested to complete the exam before time if not completed it will automatically sumited</marquee>
</div>
</div>
<div class="timer-container">
  <div id="timer">05:00</div>
<form id="examForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label>1. Who invented C++?</label>
<br>
<select name="answer1">
<option value="a1">select</option>
<option value="a">  a) Dennis Ritchie</option>
<option value="b">  b) Ken Thompson</option>
<option value="c">  c) Bjarne Stroustrup</option>
 <option value="d"> d) Brian Kernighan</option>

</select>
<br>
<label>2. What is C++?</label>
<br>
<select name="answer2">
<option value="a2">select</option>
<option value="a">   a) C++ is an object oriented programming language</option>
<option value="b"> b) C++ is a procedural programming language</option>
  <option value="c"> c) C++ is a functional programming language</option>
<option value="d">  d) C++ supports both procedural and object oriented programming language</option>
</select>
<br>
<label>3. Which of the following is the correct syntax of including a user defined header files in C++?</label>
<br>
<select name="answer3">
<option value="a3">select</option>
<option value="a">  a) #include “userdefined”</option>
 <option value="b">  b) #include [userdefined]</option>
 <option value="c">  c) #include <userdefined.h></option>
  <option value="d"> d) #include <userdefined></option>
</select>
<br>
<label4>. Which of the following is used for comments in C++?</label>
<br>
<select name="answer4">
<option value="a4">select</option>
<option value="a">   a) /* comment */</option>
  <option value="b"> b) // comment */</option>
<option value="c">   c) both // comment or /* comment */</option>
<option value="d">   d) // comment</option>
</select>
<br>
<label>5. Which of the following user-defined header file extension used in c++?</label>
<br>
<select name="answer5">
<option value="a5">select</option>
<option value="a">   a) hg</option>
 <option value="b">  b) h</option>
<option value="c">   c) cpp</option>
 <option value="d">  d) hf</option>
</select>
<br>
<label>6. Which of the following is a correct identifier in C++?</label>
<br>
 <select name="answer6">
<option value="a6">select</option>
  <option value="a">a) VAR_1234</option>
   <option value="b">b) $var_name</option>
 <option value="c">  c) 7VARNAMEv
 <option value="d">  d) 7var_name</option>
</select>
<br>
<label>7. Which of the following is not a type of Constructor in C++?</label>
<br>
 <select name="answer7">
<option value="a7">select</option>
  <option value="a"> a) Default constructor</option>
  <option value="b"> b) Parameterized constructor</option>
 <option value="c"> c) Friend constructor</option>
 <option value="d">  d) Copy constructor</option>
</select>
<br> <br>
<label>8. Which of the following approach is used by C++?</label>
<br>
 <select name="answer8">
<option value="a8">select</option>
<option value="a">   a) Bottom-up</option>
<option value="b">  b) Left-right</option>
<option value="c">   c) Right-left</option>
<option value="d">   d) Top-down</option>

</select>
<br>
<label>9. What is virtual inheritance in C++?</label>
<br>
 <select name="answer9">
<option value="a9">select</option>
<option value="a">   a) C++ technique to enhance multiple inheritance</option>
<option value="b">   b) C++ technique to ensure that a private member of the base class can be accessed somehow</option>
 <option value="c">  c) C++ technique to avoid multiple copies of the base class into children/derived class</option>
<option value="d">  d) C++ technique to avoid multiple inheritances of classes</option>
</select>
<br>
<label>10. What happens if the following C++ statement is compiled and executed?</label>
 <br>
int *ptr = NULL;
<br>
delete ptr;
<br>
<select name="answer10">
<option value="a10">select</option>
<option value="a">   a) The program is not semantically correct</option>
<option value="b">   b) The program is compiled and executed successfully</option>
 <option value="c">  c) The program gives a compile-time error</option>
<option value="d">   d) The program compiled successfully but throws an error during run-time</option>
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

}
?>
</div>
</body>
</html>