<?php 

// initializing variables

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "user";
//connect to db
$db =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (isset($_POST['submit'])) {
$email =mysqli_real_escape_string($db,$_POST['email']);
$subject =mysqli_real_escape_string($db,$_POST['subject']);
$message =mysqli_real_escape_string($db,$_POST['message']);




$query = "INSERT INTO contactus (email, subject, message) 
      VALUES ('$email','$subject','$message')";
      mysqli_query($db,$query);
    
    if($query){
        echo "<h2>Thanks, your request has been submited .</h2>";
        exit();
    }
}

?>