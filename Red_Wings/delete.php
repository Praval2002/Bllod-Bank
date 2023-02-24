<?php   
 include 'dbcon.php';  
 if (isset($_GET['id'])) {  
    echo $id;
          $id = $_GET['id'];  
      $query = "DELETE FROM `contactus` WHERE `id` = '$id'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
           header('location:contactlist.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  