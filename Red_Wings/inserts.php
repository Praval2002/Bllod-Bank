<?php if(isset ($_POST[ 'search'])){?>
<?php include('dbcon.php'); ?>

            <?php
            $bloodgroup=$_POST['bloodgroup'];
            $sql="INSERT INTO `bloodgroup` (`bloodgroup`) VALUES ('$bloodgroup');";
            $result=$con ->query($sql);
            header('location:dashboard.php');
}
            ?>