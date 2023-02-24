
<?php


// get number of data in pdo result

try{
    $pdoConnect = new PDO("mysql:host=localhost;dbname=login","root","");
} catch (PDOException $ex) {
    echo $ex->getMessage();
    exit();
}

$pdoQuery = "SELECT * FROM users";

$pdoResult = $pdoConnect->query($pdoQuery);

$pdoRowCount = $pdoResult->rowCount();

$pdoQuery1 = "SELECT * FROM blooddonors";

$pdoResult1 = $pdoConnect->query($pdoQuery1);

$pdoRowCount1 = $pdoResult1->rowCount();

$pdoQuery2 = "SELECT * FROM contactus";

$pdoResult2 = $pdoConnect->query($pdoQuery2);

$pdoRowCount2 = $pdoResult2->rowCount();

echo "<h1>$pdoRowCount</h1>";
echo "<h1>$pdoRowCount1</h1>";
echo "<h1>$pdoRowCount2</h1>";