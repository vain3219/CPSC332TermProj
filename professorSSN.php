<!DOCTYPE html>
<html>
<body>
    Hello World! Your SSN Number is: <?php echo $_POST['ssn']; ?>
    <br><br>
<?php 
/*$SSN = $_POST["ssn"];*/
$hostName = "localhost";
$userName = "cs332t32";
$password = "ooC6dein";
$dbName = $userName;

$conn = new mysqli($hostName, $userName, $password, $dbName);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select c.TITLE, s.CNUM, s.DAYS, s.START, s.END from PROF p, COURSE c, SECTION s where p.SSN = '274728374' and p.SSN = s.INSTRUCTOR and s.CNUM = c.CNUM;";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["TITLE"];
        echo "     ";
        echo $row["CNUM"];
        echo "     ";
        echo $row["DAYS"];
        echo "     ";
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