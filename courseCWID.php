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
echo "<br>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
echo "<br><br><br>"; 
    
if($result->num_rows > 0) { ?>
    <thead>
        <tr>
            <th scope="col">Section Id</th>
            <th scope="col">Grade</th><br>
        </tr>
    </thead>
    <tbody>
    <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["SEC_ID"]; ?> </td>
            <td><?php echo "\t"; ?></td>
            <td><span style="margin-left: 5em"><?php echo $row["GRADE"]; ?></span></td>
            <td><?php echo "<br>"; ?></td>
    <?php } ?>
    </tbody>
<?php }
else {
    echo "0 results";
}

$conn->close(); 
?>
</body>
</html>
