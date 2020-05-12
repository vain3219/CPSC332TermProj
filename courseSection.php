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

$sql = "select c.SEC_ID, c.DAYS, c.START, c.END, COUNT(e.CWID)
        from CNUM c
        join CWID e
        on e.CNUM = c.CNUM and c.CNUM = $CNUM
        group by e.CNUM";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["SEC_ID"];
        echo "\t";
        echo $row["CLASSNUM"];
        echo "\t";
        echo $row["DAYS"];
        echo "\t";
        echo $row["START"] . ' - ' . $row["END"];
        echo "t";
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
