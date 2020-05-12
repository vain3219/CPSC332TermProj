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

$sql = "select e.GRADE, COUNT(GRADE) as 'NumberOf' from ENROLL e, COURSE c  where c.CNUM = '$CNUM' and e.SEC_ID = $SNUM group by GRADE";
$result = $conn->query($sql);

echo "Query: $sql";    
echo "<br>";     

if($result->num_rows > 0) { ?>
    <thead>
        <tr>
            <th scope="col">Grade </th>
            <th scope="col">Count </th><br>
        </tr>
    </thead>
    <tbody>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td> <?php echo $row["GRADE"]; ?> </td>
        <td><?php echo "\t\t\t"; ?></td>
        <td><?php echo $row["NumberOf"]; ?></td>
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
