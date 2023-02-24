<?php


// get number of data in pdo result

try{
    $pdoConnect = new PDO("mysql:host=localhost;dbname=login","root","");
} catch (PDOException $ex) {
    echo $ex->getMessage();
    exit();
}

$pdoQuery = "SELECT * FROM bloodgroup";

$pdoResult = $pdoConnect->query($pdoQuery);

$pdoRowCount = $pdoResult->rowCount();

$pdoQuery1 = "SELECT * FROM blooddonors";

$pdoResult1 = $pdoConnect->query($pdoQuery1);

$pdoRowCount1 = $pdoResult1->rowCount();

$pdoQuery2 = "SELECT * FROM contactus";

$pdoResult2 = $pdoConnect->query($pdoQuery2);

$pdoRowCount2 = $pdoResult2->rowCount();
?>
<!DOCTYPE html>
<html>
<head>
	<title>DashBoard</title>
    </head>
    <style>
		body {font-family: "Lato", sans-serif;}
		body {
	background: #f41b1bc5;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 400px;
	border: 2px solid rgb(243, 239, 239)(211, 198, 198);
	padding: 10px;
	background: rgb(244, 244, 244);
	border-radius: 15px;
	margin-left: 100px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
	color: rgb(9, 9, 9);
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

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: underline;
} 

.home-nav a {
	padding: 10px;
	color: #f7bd65;
	text-transform: uppercase;
	text-decoration: none;
}
.logo{
	position:fixed;
	height:auto;
	width: 160px;
	height: 160px;
}
		.sidebar {
		  height: 100%;
		  width: 160px;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: rgb(14, 13, 13);
		  overflow-x: hidden;
		  padding-top: 16px;
		}
		
		.sidebar a {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 15px;
		  color: #faf7f7;
		  display: block;
		}
		
		.sidebar a:hover {
		  color: #fd3131;
		}
		
		.main {
		  margin-left: 160px; /* Same as the width of the sidenav */
		  padding: 0px 10px;
		}
		
		@media screen and (max-height: 450px) {
		  .sidebar {padding-top: 15px;}
		  .sidebar a {font-size: 18px;}
		}
		</style>

<body>
	
	
    <!-- <form action="change-p.php" method="post"> -->
		<div class="sidebar">
			<a href="dashboard.php"><i class="fa fa-fw fa-home"></i> Dashboard</a><br>
			<a href="bloodgroups.php"><i class="fa fa-fw fa-wrench"></i> Blood Group</a><br>
			<a href="blooddonor.php"><i class="fa fa-fw fa-user"></i> Add Donor</a><br>
			<a href="donorlist.php"><i class="fa fa-fw fa-envelope"></i> Donor List</a><br>
			<a href="contactlist.php"><i class="fa fa-fw fa-envelope"></i> Manage ContactUs</a><br>
			<a href="changepass.php"><i class="fa fa-fw fa-envelope"></i> Change Password</a><br>
			<a href="index2.php"><i class="fa fa-fw fa-envelope"></i> LogOut</a>
			<br>
			<img src="logoblack.png" class="logo">
		  </div>
          <div class='parent'>

  <div class='child'>Number of Blood Groups
  <?php echo "<h1>$pdoRowCount</h1>";?>
  </div>
  <div class='child'>Number of Blood Donors
  <?php echo "<h1>$pdoRowCount1</h1>";?>
  </div>
  <div class='child'> Number of Queries
  <?php echo "<h1>$pdoRowCount2</h1>";?>
  </div>
  <style>
.parent {
  top: 0%;
  margin: 1;
  padding: 200px 200px;
  text-align: center;
}
.child {
  display: inline-block;
  border: 1px solid white;
  padding: 50px 50px;
  align-items:unset;
}
</style>
</div>
	