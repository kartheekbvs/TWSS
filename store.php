<html>
<head>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<label for="name">name</name>
<input type="text" name="name" id="name">
<br>
<label for="email">email</name>
<input type="text" name="email" id="email">
<br>
<input type="submit" value="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$name = $_POST['name'];
$email = $_POST['email'];
$file = fopen('data.txt','a');
fwrite($file, $name . '-' . $email ."\n");
fclose($file);
}
?>
</body>
</html>
