<!DOCTYPE html>
<html>
<body>
<?php 
$SSN = $_POST["ssn"];
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

echo "Query: $sql";    
<br>       
    
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["TITLE"];
        echo "\t";
        echo $row["CNUM"];
        echo "\t";
        echo $row["DAYS"];
        echo "\t";
        echo $row["START"] . ' - ' . $row["END"];
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
