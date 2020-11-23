<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style_register.css">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <div class="container">
<div class="header">
<h2>Log in</h2>
</div>
<br>
<form action="login.php" method="post">
<?php include('errors.php'); ?>
  <div class="input">

  <label for="name" >User name:</label>
<input type="text" name="username" placeholder="username" required><br>
<label for="password" >Password:</label>
<input type="password" name="password1" id="" placeholder ="Password" required>
  </div>
  <div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
</form>
<br>
<p>Already a user ! <a href="register.php"><b> Register Here</b> </a> </p>
  </body>
</html>