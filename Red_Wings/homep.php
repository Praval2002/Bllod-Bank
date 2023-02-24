<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<html>
    <head>
        <h1>Welcome: <?php echo $row['name']; ?></h1>
        <h2>DASHBOARD</h2>

    </head>
</html>