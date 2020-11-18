
<?php 
session_start();
// initializing variables
$username ="";
$email = "";
$errors = array();
//connect to db
$db =  new mysqli("localhost", "root", '', "user");
if($db) 
{
    echo "its connected";
}else{
        echo "its not connected";
    }
//if the button register gets clicked
//register users
$username =mysqli_real_escape_string($db,$_POST['username']);
$email =mysqli_real_escape_string($db,$_POST['email']);
$password =mysqli_real_escape_string($db,$_POST['password1']);
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
    if(empty($password)) 
    {
      array_push($errors, "password is required");
    }
    if($password != $password2) 
    {
      array_push($errors,"the two passwords do not match");
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
      $password_user = md5($password);//this will encrypt the password
      $query = "INSERT INTO user (username, email, password) 
      VALUES ('$username','$email','$password_user')";
      mysqli_query($db,$query);
    
      $_SESSION['username'] = $username;
      $_SESSION['Success'] = 'You are logged in';
      header('location:index.php');
    
    }

//logout
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.html');

}


?>