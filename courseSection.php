<!DOCTYPE html>
<html>
<body>
<?php 
$CNUM = $_POST["cnum"];
$hostName = "localhost";
$userName = "cs332t32";
$password = "ooC6dein";
$dbName = $userName;

$conn = new mysqli($hostName, $userName, $password, $dbName);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select s.SEC_ID, s.DAYS, s.START, s.END, COUNT(e.CWID)
        from SECTION s
        join ENROLL e
        on e.SEC_ID = s.SEC_ID and s.CNUM = '$CNUM'
        group by e.SEC_ID";
$result = $conn->query($sql);

echo "Query: $sql";   
echo "<br>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
echo "<br><br><br>";    
    
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "Section ID: " . $row["SEC_ID"];
        echo "</div>";
        
        echo "<div>";
        echo "Room Number: " . $row["RM_NUM"];
        echo "</div>";
        
        echo "<div>";
        echo "Days: " . $row["DAYS"];
        echo "</div>";
        
        echo "<div>";
        echo $row["START"] . ' - ' . $row["END"];
        echo "</div>";
        
        echo "<div>";
        echo "Count: " . $row["COUNT"];
        echo "</div>";
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
