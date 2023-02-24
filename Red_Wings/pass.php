
<?php 

include('dbcon.php');
include('session.php'); 
$session_pass=$_SESSION['password'];
$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<?php
if(isset ($_POST['submit'])){
	$op=$_POST['op'];
	$np=$_POST['np'];
	$c_np=$_POST['c_np'];
	
}
?>
<?php
if($row[2] ==$op){
if($np ==$c_np)
{
    $query 		= mysqli_query($con, "UPDATE `users` SET `password` = '$np' WHERE `users`.`user_id` = $row[0];");
	$row		= mysqli_fetch_array($query);
	$num_row 	= mysqli_num_rows($query);
    echo '<script>
    alert("Voting successfull");
    window.location="dashboard.php";

    </script>';
}
else
				{
					echo 'old password is incorrectly entered';
                    header('location:changepass.php');

				}
}
else
				{
					echo 'old password and new password do not match';
                    header('location:changepass.php');
				}

?>
