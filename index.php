<!DOCTYPE html>
<html>
<head>
<style>
h1 {
text-align:center;
}

body {
text-align:center;
background-color:grey;
}

div.results {
background-color:white;
width:100%;
height:300px;
border: 3px solid black;
}
</style>

<title>University Database</title>
</head>

<body>
<h1>Welcome to the University Database</h1>

<?php
function query1() {
    $hostName = "localhost";
    $userName = "cs332t32";
    $password = "ooC6dein";
    $dbName = $userName;

    if($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
    }

    $query = "select c.TITLE, s.CNUM, s.DAYS, s.START, s.END from PROF p, COURSE c, SECTION s where p.SSN = '274728374' and p.SSN = s.INSTRUCTOR and s.CNUM = c.CNUM;";
    $result = $conn->query($query);

    if($result->num_rows > 0) {
        echo '<div class="rsltcont">';
        echo '<div class="results">';
        echo '<p>';
               while($row = $result->fetch_assoc() ) {
                       echo $row['TITLE'] . " " . $row['CNUM'] . " " . $row['DAYS'] . " " . $row['START'] . " " . $row['END'] . "<br>";
               }
        echo '</p>';
        echo '</div>';
        echo '</div>';
    } else {
        echo "0 results";
    }
    $conn->close();

// display results on webpage
}
?>  
<button type="button" onclick=query1()>Query #1</button>
   <div class="results">
   </div>
<button type="button" onclick=query2()>Query #2</button>
   <div class="results">
   </div>
<button type="button" onclick=query3() >Query #3</button>
   <div class="results">
   </div>
<button type="button" onclick=query4()>Query #4</button>
   <div class="results">
   </div>
</body>
</html>
