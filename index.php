
<?php 
session_start();
if(!isset($_SESSION['username'])){
  $_SESSION['msg'] ="You must log in first to view this page";
  header("location:login.php");
}
if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header("location:login.php");
}

?>
<?php include('contactus.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Science</title>
    <link rel="icon" href="images/icon.png">
  </head>
  <body>

  <div class="main_container" id="home">
<div class="navbar">
<div class="logo">
<a href="#market_logo">#market_logo</a>
</div>
<div class="navbar_items"> 
<ul>
  <li> <a href="">Home</a> </li>
  <li> <a href="#contact">Contact us</a> </li>
  <li> <a href="#servecies">Our Service</a> </li>
  <li> <a href="#ourteam">Our Team</a> </li>
  <li> <a href="#about">About</a> </li>
  <li><a href="index.php?logout='1'">Logout</a></li>
 
</ul>
</div>
</div>
<div class="banner_image">

<div class="banner_content">
<?php if(isset($_SESSION['username'])) : ?>
<h1 style="color:red">You are welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
<?php endif ?>
  <h1>Computer science is amazing <br>
<span>only amazing people fall in love with it</span>
  </h1>
  <p class="para1">Computer Science is the study of computers and computational systems. ...
     Although knowing how to program is essential to the study of computer science, 
     it is only one element of the field. 
     Computer scientists design and analyze algorithms to solve programs
      and study the performance of computer hardware and software.</p>
</div>
</div>
<div class="about" id ="about">
<h1 class="title"> About  us</h1>
<p class="para">Computer Science is the study of computers and computational systems. ...
  Although knowing how to program is essential to the study of computer science, 
  it is only one element of the field. 
  Computer scientists design and analyze algorithms to solve programs
   and study the performance of computer hardware and software.</p>
   <div class="btn"><a href="#">Learn More</a></div>
</div>
<div class="servecies" id="servecies">
  <h1 class="title">Our Services</h1>
  <p class="para">Computer Science is the study of computers and computational systems. ...
    Although knowing how to program is essential to the study of computer science, 
    it is only one element of the field. 
    Computer scientists design and analyze algorithms to solve programs
     and study the performance of computer hardware and software.</p>
     <div class="diff_services">
         <div class="diff_service_item">
           <a href="#">
           <img src="images/Service1.jpg" alt="Service_image"></a>
           <h3>Web Development</h3>
           <p>Computer Science is the study of computers and computational systems. ...
            Although knowing how to program is essential to the study of computer science, 
            it is only one element of the field. </p>
         </div>
         <div class="diff_service_item">
           <a href="#">
          <img src="images/Service2.jpg" alt="Service_image"></a>
          <h3>App Development</h3>
          <p>Computer Science is the study of computers and computational systems. ...
           Although knowing how to program is essential to the study of computer science, 
           it is only one element of the field. </p>
         </div>
         <div class="diff_service_item">
           <a href="#">
          <img src="images/Service3.jpg" alt="Service_image"></a>
          <h3>Machine Learning</h3>
          <p>Computer Science is the study of computers and computational systems. ...
           Although knowing how to program is essential to the study of computer science, 
           it is only one element of the field. </p>
         </div>
     </div>
</div>
<form action="index.php" method= "post">
<div class="contact" id="contact">
  <h1 class="title"> Contact Us</h1>
  <div class="from_wrapper">
    <div class="from_input">
      <input type="text" placeholder="Email" name="email" id="" required>
    </div>
    <div class="from_input">
      <input type="text" placeholder="Subject" name="subject">
    </div>
    <div class="from_input">
      <textarea name="message" placeholder="Message" required></textarea>
    </div>
    <div class="btn">
    <input id="sometext" style="  display: block;
    width: 180px;
    height: 35px;
    border: 2px solid #fb2274;
    line-height: 35px;
    /* to center it */
    margin: 25px auto 0;
    color: #fb2274;
    text-align: center;" type="submit" name="submit" value="submit">
    </div>
  </div>
</div>
</form>
<div class="ourteam" id="ourteam">
<h1 class="title">Our Team</h1>
<div class="wrapper_ourteam">
  <div class="team1 team">
    <div class="team_member">
      <img src="images/team1.jpg" alt="team1 image">
    </div>
    <div class="team_member">
      <img src="images/team.jpg" alt="team2 image">
    </div>
    <div class="team_member">
      <img src="images/team3.jpg" alt="team3 image">
    </div>
  </div>
  <div class="team2 team">
    <div class="team_member">
      <img src="images/team4.jpg" alt="team1 image">
    </div>
    <div class="team_member">
      <img src="images/team5.jpg" alt="team2 image">
    </div>
    <div class="team_member">
      <img src="images/team6.jpg" alt="team3 image">
    </div>
  </div>
</div>
</div>
<div class="footer">
  <a href="#">@ 2020 Coding By Said</a>
</div>
<div class="row">
  <a href="#home"><img src="images/arrow.jpg" alt="arrow image"></a>
</div>
  </div>
  </body>
</html>
