<?php 
session_start();
error_reporting(0);
include('config.php')
?>
<!DOCTYPE html>
<html>
<head>
  <title>Become A Donor</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-seri;}
  

body, html {
  height: 100%;
  line-height: 1.8;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
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
form {
	width: 400px;
  
	border: 2px solid rgb(243, 239, 239)(211, 198, 198);
	padding: 10px;
	background: rgb(244, 244, 244);
	border-radius: 15px;
	margin-left: 100px;
}



input {
	display: block;
	border: 2px solid rgb(50, 50, 50);
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: rgb(48, 47, 47);
	font-size: 18px;
	padding: 10px;
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
  
  </div>
  <form method="post" action="actionn.php">

  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" class="form-control"name="fullname">
  	</div>
    <div class="input-group">
      <label>Mobile </label>
      <input type="text"class="form-control" name="mobile">
    </div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="text" class="form-control" name="email">
  	</div>
	  <div class="input-group">
  	  <label>Age</label>
  	  <input type="text" class="form-control" name="age">
  	</div>
	  <div class="input-group">
  	  <label>Gender</label>
  	  <input type="text"  class="form-control" name="gender">
      <option value="">Select Blood group</option>
  	</div>
      <div class="input-group">
	  <select name="bloodgroup" class="form-control" name="bloodgroup" required>
      <label>Blood Group</label>
			<option value="">Select Blood group</option>
				<?php $sql = "SELECT * from bloodgroup ";
				$query = $dbh -> prepare($sql);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				if($query->rowCount() > 0)
				{
				foreach($results as $result)
				{				?>	
				<option value="<?php echo htmlentities($result->bloodgroup);?>"><?php echo htmlentities($result->bloodgroup);?></option>
				<?php }} ?>
	   </select>
  	</div>
	  <div class="input-group">
  	  <label>City</label>
  	  <input type="text" class="form-control" name="address">
  	</div>

  	<div class="input-group">
  	  <input type="submit" value="submit" class="button" name="butt">
  	</div>
  </form>
</body>
</html>
