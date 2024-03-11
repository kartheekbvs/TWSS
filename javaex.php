<html>
<head>
<title>java exam</title>
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
<style>
form {
    background-color: ;
    color: ;
    padding: 20px;
    text-align: left;
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
</head>
<body>
<div class="a1">
<h1>JAVA exam</h1>
<div class="mar">
<marquee direction="left">Note:students are kindly reqested to complete the exam before time if not completed it will automatically sumited</marquee>
</div>
</div>
<div class="timer-container">
  <div id="timer">05:00</div>
<form id="examForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<label>1. Who invented Java Programming?</label>
<br>
<select name="answer1">
<option value="a">a) Guido van Rossum</option>
<option value="b">b) Bjarne Stroustrup</option>
<option value="c">c) James Gosling</option>
<option value="d">d) Dennis Ritchie</option>
</select>
<br>

<label>2. Which statement is true about Java?</label>
<br>
<select name="answer2">
<option value="a">a) Java is a sequence-dependent programming language</option>
<option value="b">b) Java is a code dependent programming language</option>
<option value="c">c) Java is a platform-dependent programming language</option>
<option value="d">d) Java is a platform-independent programming language</option>
</select>
<br>
<label>3. Which component is used to compile, debug and execute the java programs?</label>
<br>
<select name="answer3">
<option value="a">a) JDK</option>
<option value="b">b) JRE</option>
<option value="c">c) JIT</option>
<option value="d">d) JVM</option>
</select>
<br>
<label>4. Which one of the following is not a Java feature?</label>
<br>
<select name="answer4">
<option value="a">a) Object-oriented</option>
<option value="b">b) Portable</option>
<option value="c">c) Use of pointers</option>
<option value="d">d) Dynamic and Extensible</option>
</select>
<br>
<label>5. Which of these cannot be used for a variable name in Java?</label>
<br>
<select name="answer5">
<option value="a">a) identifier & keyword</option>
<option value="b">b) keyword</option>
<option value="c">c) identifier</option>
<option value="d">d) none of the mentioned</option>
</select>
<br>
<label>6. What is the extension of java code files?</label>
<br>
<select name="answer6">
<option value="a">a) .java</option>
<option value="b">b) .js</option>
<option value="c">c) .txt</option>
<option value="d">d) .class</option>
</select>
<br>

<label>7. What will be the output of the following Java code?</label>
<br>

    class increment {
        public static void main(String args[])
        {        
             int g = 3;
             System.out.print(++g * 8);
        }
    }
<br>
<select name="answer7">
<option value="a">a) 32</option>
<option value="b">b) 33</option>
<option value="c">c) 24</option>
<option value="d">d) 25</option>
</select>
<br>
<label>8. Which environment variable is used to set the java path?</label>
<br>
<select name="answer8">
<option value="a">a) JAVA_HOME</option>
<option value="b">b) MAVEN_Path</option>
<option value="c">c) JavaPATH</option>
<option value="d">d) JAVA</option>
</select>
<br>
<label>9. What will be the output of the following Java program?</label>

<br>
class output<br> {<br>
        public static void main(String args[])<br>
        {<br>
            double a, b,c;<br>
            a = 3.0/0;<br>
            b = 0/4.0;<br>
            c=0/0.0;<br>
 
   System.out.println(a);<br>
            System.out.println(b);<br>
            System.out.println(c);<br>
        }<br>
    }<br>
<br>
<select name="answer9">
<option value"a">a) NaN</option>
<option value"b">b) Infinity</option>
<option value="c">c) JAVA_HOME</option>
<option value"d">d) 0.0</option>
</select>
<br>
<label>10. Which of the following is not an OOPS concept in Java?</label>
<br>
<select name="answer10">
<option value"a">a) Polymorphism</option>
<option value"b">b) Compilation</option>
<option value"c">c) Inheritance</option>
<option value"d">d) Encapsulation</option>
</select><br>
<button type="submit" id="submitBtn">submit</button>
</form>
</div>
</body>
</html>