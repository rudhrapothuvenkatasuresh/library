<html>
<head>
<link rel="stylesheet" href="css\loginpage.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="bg-img">
  <form action="adminverify.php" method="POST" class="container" autocomplete="off">
    <h1>Login</h1>

    <label for="email"><b>User name</b></label>
    <input type="text" placeholder="Enter username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="submit" class="btn" name="login">
  </form>
</div>
</body>
</html>
