<?php
Define('DB_HOST','localhost');
Define('DB_USER','root');
Define('DB_PASS','');
Define('DB_NAME','login');
try{
    $conn=mysqli_connect($servername, $username, $password, $database);
    $dbh= new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch(PDOException $e)
{
    exit("Error: " . $e->getMessage());
}
?>