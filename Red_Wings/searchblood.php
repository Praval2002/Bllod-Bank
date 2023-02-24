<?php 
session_start();
error_reporting(0);
include('config.php');
?>
<?php
$sql="SELECT * FROM 'blooddonors'";
$query=$dbh ->prepare($sql);
$query->execute();
$result = mysqli_query($conn,$sql);
?>