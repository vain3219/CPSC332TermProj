<?php
$SSN = $_POST['SSN']
$hostName = "localhost";
$userName = "cs332t32";
$password = "00C6dein";
$dbName = $userName;

$conn = new mysqli($hostName, $userName, $password, $dbName);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT C.COURSE_TITLE, S.CLASSROOM, S.MEETING_DAYS, S.BEGINNING_TIME, S.ENDING_TIME
        FROM PROFESSOR P, COURSE C, COURSE_SECTIONS S
        WHERE S.SSN_NUMBER = $SSN AND S.COURSE_ID = C.COURSE_ID";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["COURSE_TITLE"];
        echo $row["CLASSROOM"];
        echo $row["MEETING_DAYS"];
        echo $row["BEGINNING_TIME"] . ' - ' . $row["ENDING_TIME"];
    }
}
else {
    echo "0 results";
}

$conn->close();
?>