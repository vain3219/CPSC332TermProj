<!DOCTYPE html>
<html>
<body>
<?php 
$CWID = $_POST["CWID"];
$hostName = "localhost";
$userName = "cs332t32";
$password = "ooC6dein";
$dbName = $userName;

$conn = new mysqli($hostName, $userName, $password, $dbName);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select SEC_ID, GRADE
        from ENROLL
        where CWID = $CWID";
$result = $conn->query($sql);

echo "Query: $sql";    
echo "<br>"; 
    
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["SEC_ID"];
        echo "\t";
        echo $row["GRADE"];
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