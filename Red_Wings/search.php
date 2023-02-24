
<!DOCTYPE html>
<html>
<head>
<title>Bar using PHP</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-seri;}

body, html {
  height: 100%;
  line-height: 1.8;
  justify-content: center;
	align-items: center;
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
h1{
    align-items: center;
}
form{
    align-items: center;
    margin-left: 500px;
}
label{
    align-items: center;
}
</style>
</head> 

<body>
    <!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <div class="logo">
          <a href="#"><img src="whitebanner.png"></a></div>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
      <a href="homepage.php" class="w3-bar-item w3-button"> HOME</a>
      <a href="contact.php" class="w3-bar-item w3-button"> CONTACT US</a>
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
  <br>
  <br>
  <br>
  <br>
<form  action="seacrhs.php" method="POST">
    <label>BloodGroup</label>
    <input type="text" name="bloodgroup"></input>
    <input type="submit" name="search"></input>
</form>

</html>