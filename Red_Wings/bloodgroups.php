<?php include('dbcon.php'); 
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$delete=mysqli_query($con,"DELETE FROM `bloodgroup` WHERE `bloodgroup`.`id` = '$id';");
}
	
	?>
    <body>
    <h1>Update Blood Group</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>  
        <tbody>
            <?php
            $sql="SELECT * FROM `bloodgroup`";
            $result=$con ->query($sql);
            while($row=$result->Fetch_assoc()){
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["bloodgroup"] . "</td>
				<td><a href='deletes.php?id=".$row["id"]."'
				class='btn'>DELETE</a></td>
            </tr>"  ;
            }
             
           
            ?>
			
        </tbody>

    </table>
    <br>
    <br>

    <br>
    <br>
    <form  action="inserts.php" method="POST">
    <input type="text" name="bloodgroup">Enter A BloodGroup</input>
    <input type="submit" name="search"></input>
</form>
</body>
</html>
<style>
	btn{
		text-decoration: none;
	}
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
    margin-left: 110px;
    width: 600px;
}

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