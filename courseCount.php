<!DOCTYPE html>
<html>
<body>
<?php 
$CNUM = $_POST["cnum"];
$SNUM = $_POST["snum"];
$hostName = "localhost";
$userName = "cs332t32";
$password = "ooC6dein";
$dbName = $userName;

$conn = new mysqli($hostName, $userName, $password, $dbName);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*$sql = "select e.GRADE, COUNT(GRADE) as 'NumberOf' from ENROLL e, COURSE c  where c.CNUM = $CNUM and e.SEC_ID = $SNUM group by GRADE";*/
    $sql = "select e.GRADE, COUNT(GRADE) as 'NumberOf' from ENROLL e, COURSE c  where c.CNUM = 'CPSC101' and e.SEC_ID = '0' group by GRADE";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["GRADE"];
        echo "\t";
        echo $row["COUNT"];
        echo "<br>";
    }
}
else {
    echo "0 results";
}

$conn->close(); 
?>
</body>
</html>
