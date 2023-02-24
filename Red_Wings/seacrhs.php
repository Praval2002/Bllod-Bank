<?php if(isset ($_POST[ 'search'])){?>
<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>donor list</title>
    <style>
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
</head>
    <h1>RESULT</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Email ID</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Address</th>
            </tr>
        </thead>  
        <tbody>
            <?php
            $bloodgroup=$_POST['bloodgroup'];
            $sql="SELECT * FROM `blooddonors` WHERE `bloodgroup` LIKE '$bloodgroup'";
            $result=$con ->query($sql);
            while($row=$result->Fetch_assoc()){
                echo "<tr>
                <td>" . $row["fullname"] . "</td>
                <td>" . $row["mobile"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["age"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["bloodgroup"] . "</td>
                <td>" . $row["address"] . "</td>
            </tr>"  ;
            }
             
           
            ?>
        </tbody>
    </table>
</body>
</html>
<style>
    html,
body {
	height: 100%;
}
a{
    text-decoration: none;
    color: white;
}

body {
	margin: 0;
	background: maroon;
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 100%;
	transform: translate(-50%, -50%);
}

table {
	
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
  
    width: 600px;
}

th,
td {
	
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

h1{
    text-align: center;
    color: aliceblue;
    text-transform: uppercase;
}

</style>
<?php }
?>