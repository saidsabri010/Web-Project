<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style_register.css">
    <title>Login Page</title>
  </head>
  <body>
  <div class="container">
<div class="header">
<h2>Log in</h2>
</div>
<br>
<form action="login.php" method="post">
  <div class="input">
  <label for="name" >User name:</label>
<input type="text" placeholder="user name" required><br>
<label for="password" >Password:</label>
<input type="password" name="" id="" placeholder ="Password" required>
  </div>

  <button class="btn" type="submit" name="login">Login</button>
</form>
<br>
<p>Already a user ! <a href="register.php"><b> Register Here</b> </a> </p>
  </body>
</html>