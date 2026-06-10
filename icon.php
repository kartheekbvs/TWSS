<html>
<head>
  <title>Login Redirect</title>
  <style>
    .user-icon
 {
      display: inline-block;
      width: 30px;
      height: 30px;
      background-color: #ccc;
      border-radius: 50%;
      margin-right: 10px;
    }
  </style>
  <script>
       function login() 
{
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;  
      if(email ==='user@example.com' && password ==='password')
 {
        window.location.href = 'hr1.html';
      }
    }
  </script>
</head>
<body>
  <h1>Login Page</h1>
  
  <form>
    <label for="email">Email:</label>
    <input type="email" id="email" required>
<br><br>
     <label for="password">Password:</label>
    <input type="password" id="password" required><br><br>
     <button type="button" onclick="login()">Login</button>
  </form>
  <script>
     var loggedInUser = 'John Doe'; 
    var userIcon = document.createElement('div');
    userIcon.className = 'user-icon';
    document.body.appendChild(userIcon);
  </script>
</body>
</html>