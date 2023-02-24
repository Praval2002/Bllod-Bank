<?php 
session_start();
error_reporting(0);
include('config.php')
?>
<?php
$fullname=$_POST['fullname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$bloodgroup=$_POST['bloodgroup'];
$address=$_POST['address'];
$sql="INSERT INTO  blooddonors(fullname,mobile,email,age,gender,bloodgroup,address) VALUES('$fullname','$mobile','$email','$age','$gender','$bloodgroup','$address')";
$query1=$dbh ->prepare($sql);
$query1->execute();
?>