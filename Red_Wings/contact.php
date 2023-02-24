<?php 
session_start();
error_reporting(0);
include('config.php')
?>	
<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];
$sql="INSERT INTO contactus (name,email,mobile,message) values('$name','$email','$mobile','$message')";
$query=$dbh ->prepare($sql);
$query->execute();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact US</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-seri;}

body, html {
  height: 100%;
  line-height: 1.8;
}
.w3-bar .w3-button {
  padding: 16px;
}
.logo img{
    position: absolute;
    margin-top: 0px;
    margin-left: 0px;
    height: 57px;
    width: 380px;
}
h2{
    color: rgb(200, 13, 13);
}
</style>
</head>
<body>
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <div class="logo">
          <a href="#"><img src="whitebanner.png"></a></div>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
	  <a href="homepage.php" class="w3-bar-item w3-button"> HOME</a>
      <a href="aboutus.php" class="w3-bar-item w3-button">ABOUT US</a>
      <a href="whydonor.php" class="w3-bar-item w3-button">WHY BECOME DONOR</a>
      <a href="blooddonor.php" class="w3-bar-item w3-button"> BECOME A DONOR</a>
      <a href="search.php" class="w3-bar-item w3-button"> SEARCH BLOOD</a>
      <a href="contact.php" class="w3-bar-item w3-button"> CONTACT US</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->
  
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="contact.php">

  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name">
  	</div>
    <div class="input-group">
      <label>Email</label>
      <input type="text" name="email">
    </div>
  	<div class="input-group">
  	  <label>mobile</label>
  	  <input type="text" name="mobile">
  	</div>
      <div class="input-group">
  	  <label>message</label>
  	  <input type="text" name="message">
  	</div>
  	<div class="input-group">
  	  <input type="submit" value="submit" class="button" name="butt">
  	</div>
  </form>
</body>
</html>