<!DOCTYPE html>
<html>
<head>
<title>home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-seri;}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("blood1.jpg");
  min-height: 100%;
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #cf00008e;
}
h1{
    color: rgb(200, 13, 13);
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



<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Be A Hero, Be A Donor</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Be A Hero, Be A Donor</span><br>
    <span class="w3-large">The gift of blood is a gift to someone's life.</span>
    <p><a href="blooddonor.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">DONATE BLOOD</a></p>
  </div> 
  
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h1 class="w3-center">WELCOME TO RED WINGS</h1>
  <h2 class="w3-center w3-large">Learn About Donation</h2>
  <h3 class="w3-large">Compatible Blood Type Donors</h2>

<table>
  <tr>
    <th>Blood Type</th>
    <th>Donate Blood To</th>
    <th>Receive Blood From</th>
  </tr>
  <tr>
    <td>A+</td>
    <td>A+ AB+</td>
    <td>A+ A- O+ O-</td>
  </tr>
  <tr>
    <td>O+</td>
    <td>O+ A+ B+ AB+</td>
    <td>O+ O-</td>
  </tr>
  <tr>
    <td>B+</td>
    <td>B+ AB+</td>
    <td>B+ B- O+ O-</td>
  </tr>
  <tr>
    <td>AB+</td>
    <td>AB+</td>
    <td>EVERYONE</td>
  </tr>
  <tr>
    <td>A-</td>
    <td>A+ A- AB+ AB-</td>
    <td>A- O-</td>
  </tr>
  <tr>
    <td>O-</td>
    <td>EVERYONE</td>
    <td>O-</td>
  </tr>
  <tr>
    <td>B-</td>
    <td>B+ B- AB+ AB-</td>
    <td> B- O-</td>
  </tr>
  <tr>
    <td>AB-</td>
    <td>AB+ AB-</td>
    <td>AB- A- B- O-</td>
  </tr>
</table>
  

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>HELP SAVE LIVES!</h3>
      <p>Every 2 Seconds, someone in the country is in need of blood<br>

        Every year our nation requires about 4 Crore units of blood<br>
        
        Out of which only a meager 5 Lakh units of blood are available</p>
      <p><a href="homednoorlist.php" class="w3-button w3-black"><i class="fa fa-th"> </i>Recent Blood Donors</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="blood2.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

    
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  
  
  
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
