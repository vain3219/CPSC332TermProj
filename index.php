<!DOCTYPE html>
<html>
   <head>
      <style>
         h1 {
         text-align:center;
         }
         body {
         text-align:center;
         background-image: url("bikinibottom.jpg");
         background-color: none;
         }
         div.rect {
         text-align:center;
         align:center;
         display:inline;
         background-color: white;
         height: 100px;
         width: 175px;
         }
      </style>
      <title>Bikini Bottom University Database</title>
   </head>
   <body>
      <h1>Welcome to the Bikini Bottom University Database</h1>
      <h2>Professor Queries:</h2>
      <form action="professorSSN.php" method="POST">
         <div style="background-color:none;">
            <br>
            <div class="rect">
               Query #1
               <br>
               Enter Professors SSN:
               <br>
               <input type="text" name="ssn">
               <br>
               <input type="submit" value="Submit">
            </div>
            <br><br>
         </div>
      </form>
      <br><br>
      <form action="courseCount.php" method="POST">
         <div style="background-color: none;">
            <br>
            Query #2
            <br>
            Enter Course Number:
            <br>
            <input type="text" name="cnum">
            <br>
            Enter Section Number:
            <br>
            <input type="text" name="snum">
            <br>
            <input type="submit" value="Submit">
            <br><br>
         </div>
      </form>
      <h2>Student Queries:</h2>
      <form action="courseSection.php" method="POST">
         <div style="background-color:none;">
            <br>
            Query #3
            <br>
            Enter Course Number:
            <br>
            <input type="text" name="cnum">
            <br>
            <input type="submit" value="Submit">
            <br><br>
         </div>
      </form>
      <br><br>
      <form action="courseCWID.php" method="POST">
         <div style="background-color:none;">
            <br>
            Query #4
            <br>
            Enter Campus ID:
            <br>
            <input type="text" name="CWID">
            <br>
            <input type="submit" value="Submit">
            <br><br>
         </div>
      </form>
   </body>
</html>
