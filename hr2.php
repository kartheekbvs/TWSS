<html>
<head>
<?php
SESSION_START();
if(!isset($_SESSION["pname"])) {
exit();
}
$username=$_SESSION["pname"];
?>
<title>TWSS INTERNSHIP</title>
<style type="text/css">
body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
}

.container1 {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

header {
    background-color: #3582e1;
    color: #fff;
    padding: 20px 0;

}

header h1 {
    float: left;
}

nav ul {
    float: right;
}

nav ul li {
    display: inline;
    margin-left: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}
.hero {
    background-color: #f4f4f4;
    padding: 100px 0;
    text-align: center;
}

.hero h2 {
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #3582e1;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

footer {
    background-color: #3582e1;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}
</style>
<style>
.demo
{
display: flex;
text-align: center;
justify-content: center;
color: blue;
}
</style>
<style>
.m1
{
display: flex;
text-align: center;
justify-content: center;
color: blue;
}
</style>
<style>
.m2
{
display: flex;
text-align: center;
justify-content: center;
color: blue;
}
</style>
<style>
.m3
{
display: flex;
text-align: center;
justify-content: center;
color: blue;
}
</style>
<style>
.mar {
    background-color: #3582e1;
   
    color: red;
    padding: 20px;
    text-align: center;
}
</style>
</head>
<body>
<style>
        .menu {
            display: inline-block;
            position: fixed;
            cursor: pointer;
            padding: 10px;
            background-color: #3582e1;

        }
       
        .menu span {
            display: block;
            width: 35px;
            height: 5px;
            margin-bottom: 5px;
            background-color: #333;
        }
       
        .menu:hover span {
            background-color: #555;
        }
       
        .dropdown {
            display: none;
           
            background-color: rgb(255,255,255);
            min-width: 260px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
       
        .dropdown a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
       
        .dropdown a:hover {
            background-color: #f1f1f1;
    .   }
       
        .menu:hover .dropdown {
            display: block;
        }


    </style>

     
<style>
.e1 {
    background-color: #696969;
    color: #fff;
    padding: 20px;
    text-align: center;
}
</style>
<style>
footer {
    background-color:  #3582e1;
    color: #fff;
    padding: 20px;
    text-align: center;
}
</style>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFKoPNFAUjWSdH-F_m-SynPpL1jqKdH7SXyg&usqp=CAU');
    background-size: cover;
    background-position: center;
    color: #ffffff; /* Text color */
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 300px;
    
}

</style>
<style>
.image1
{
}
</style>
<style>

</style>


    <div class="menu">
        <span></span>
<span></span>
<span></span>
        <div class="dropdown">
            <a href="http://localhost/validate1.php">Login</a>
            <a href="http://localhost/validate.php">signin</a>
            <hr>
            <a href="http://localhost/about.php">About</a>
            <a href="http://localhost/contactus.php">Contact</a>
            <a class="item" href="http://localhost/hr1.php">home</a>
        </div>
    </div>
<header>
<div class="container1"
<h1>TWSS INTERNSHIP</h1>
<nav>
<ul>
         <li><a class="item" href="http://localhost/registration.php/">Registration</a></li>
        <li><a class="item" href="http://localhost\intern.php">Internship</a></li>
    <li><a class="item" href="http://localhost/training.php.">Training</a></li>
 <li><a class="item" href="http://localhost/validate2.php">Attend exam</a></li>
    <li><a class="item" href="http://localhost/certification.php">Certification</a></li>
      <li><a class="item" href="http://localhost/about.php">About</a></li>
   <li><a class="item" href="http://localhost/contactus.php">contact us</a></li>
</ul>
</nav>
</div>
   </header>
<div class="mar">
<marquee direction="left">Note:Registration is only for details of a candidate For conductance of exam please kindly login</marquee>
</div>
<div class="image1">

</div>
<div class="welcome-container">
 <h4>WELCOME,<?php echo $username; ?>!</h4>
  </div>
<section>
<div class="container">
  <h1>Give the Best Start to Your Career</h1>
 <h3>Learn, practice, and get hired!</h3>
 <p>A 50-day transformational journey to help your college students meet their
 career goals while you win exciting rewards and learn real-world
 skills like marketing, communication & leadership</p>
<h2>For student registration<a href="http://localhost/student.php" class="btn">click</a>For college registration<a href="http://localhost/college.php" class="btn">click</a></h2>
</div>
</section>
<footer>
        <p>&copy; 2024 TWSS. All rights reserved.</p>
    </footer>
</body>
</html>