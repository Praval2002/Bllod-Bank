<?php   
 include 'dbcon.php';  
 if (isset($_GET['id'])) {  
    echo $id;
          $id = $_GET['id'];  
      $query = "DELETE FROM `bloodgroup` WHERE `id` = '$id'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
           header('location:dashboard.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  