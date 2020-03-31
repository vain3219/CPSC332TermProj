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

div.buttons {
position:sticky;
background-color:lightblue;
Height:110px;
Width:60%;
left:20%;
text-align:center;
border: 3px solid black;
}

div.prof {
background-color:lightblue;
width:50%;
Float:left;
display:inline-block;
}

div.student {
background-color:lightblue;
width:50%;
float:left;
display:inline-block;
}

div.rsltcont {
text-align:center;
position:relative;
top:30px;
}

div.results {
background-color:white;
width:100%;
height:700px;
border: 3px solid black;
}
</style>

<title>University Database</title>
</head>

<body>
<?php 
	$hostName = "localhost";
	$userName = "cs332t32";
	$password = "ooC6dein";
	$dbName = $userName;

	$link = mysql_connect($hostName, $userName, $password)or die("Unable to connect to host $hostName");
	mysql_select_db($dbName, $link) or die("Unable to select database $dbName");

	$SQL = "show columns from STUDENT";
	$students = mysql_query($SQL, $link);

	mysql_close($link);
?>

<h1>Welcome to the University Database</h1>

<div class="buttons">
<div class="prof">
<h2>Professor Queries</h2>
<button type="button" onclick="alert('Query #1')">Query #1</button> 
<button type="button" onclick="alert('Query #2')">Query #2</button> 
</div>

<div class="student">
<h2>Student Queries</h2>
<button type="button" onclick="alert('Query #3')">Query #3</button> 
<button type="button" onclick="alert('Query #4')">Query #4</button> 
</div>
</div>

<div class="rsltcont">
<div class="results">
<p> <?php echo $students ?> </p>
</div>
</div>

</body>
</html> 
