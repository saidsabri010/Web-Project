
<?php 


session_start();
// initializing variables

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "user";
$errors = array();
//connect to db
$db =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 if (isset($_POST['register']))
 {
//if the button register gets clicked
//register users

  $username =mysqli_real_escape_string($db,$_POST['username']);
  $email =mysqli_real_escape_string($db,$_POST['email']);
  $password1 =mysqli_real_escape_string($db,$_POST['password1']);
  $password2 =mysqli_real_escape_string($db,$_POST['password2']);




//make sure inputs are filled properly
//form validation,errors:
    if(empty($username)) 
    {
      array_push($errors, "email is required");
    }
    if(empty($email)) 
    {
      array_push($errors, "email is required");
    }
    if(empty($password1)) 
    {
      array_push($errors, "password is required");
    }
    if($password1 != $password2) 
    {
      array_push($errors,"the two passwords do not match");
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      array_push($errors, "invalid email");
    }

//lest's make the username unique
$user_check_query = "SELECT * FROM user Where username='$username' or email = '$email' LIMIT 1";
$result = mysqli_query($db,$user_check_query);
//mysqli_fetch_assoc : function is used to return an associative array
$user = mysqli_fetch_assoc($result);
if($user)
{
if($user['username']=== $username) 
    {
      array_push($errors,"username already exist !");
    }   
    if($user['email']=== $email) 
    {
      array_push($errors,"email already exist !");
    } 
}
    //if there no errors register the user
    if(count($errors)==0) 
    {
      $password_user = md5($password1);//this will encrypt the password
      $query = "INSERT INTO user (username, email, password) 
      VALUES ('$username','$email','$password_user')";
      mysqli_query($db,$query);
    
      $_SESSION['username'] = $username;
      $_SESSION['Success'] = 'You are logged in';
      header('location:login.php');
    
    }
}

    //login
    if(isset($_POST['login_user'])) 
    {
      $username =mysqli_real_escape_string($db,$_POST['username']);
      $password =mysqli_real_escape_string($db,$_POST['password1']);
      if(empty($username)) 
      {
        array_push($errors,"username is required !");
      }
      if(empty($password)) 
      {
        array_push($errors,"password is required !");
      }
      if(count($errors) == 0) 
      {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username ='$username' AND password= '$password'";
        $results = mysqli_query($db,$query);
        if(mysqli_num_rows($results)==1) 
        {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "now you are logged in !";
          header('location: index.php');
        } 
        else
        {
          array_push($errors,"wrong username/password,Please try again !");
        }
      }

    }

//logout
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.html');
}


?>