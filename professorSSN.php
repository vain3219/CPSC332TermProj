<!DOCTYPE html>
<html>
    
<?php
 echo "hello";
$SSN = $_POST['ssn']
$hostName = "localhost";
$userName = "cs332t32";
$password = "ooC6dein";
$dbName = $userName;

$conn = new mysqli($hostName, $userName, $password, $dbName);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select c.TITLE, s.CNUM, s.DAYS, s.START, s.END from PROF p, COURSE c, SECTION s where p.SSN = $SSN and p.SSN = s.INSTRUCTOR and s.CNUM = c.CNUM;";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["TITLE"];
        echo $row["CNUM"];
        echo $row["DAYS"];
        echo $row["START"] . ' - ' . $row["END"];
    }
}
else {
    echo "0 results";
}

$conn->close();
?>
</html>
