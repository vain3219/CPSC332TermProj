Last login: Wed Apr 22 15:27:29 on ttys001

The default interactive shell is now zsh.
To update your account to use zsh, please run `chsh -s /bin/zsh`.
For more details, please visit https://support.apple.com/kb/HT208050.
Codys-Air:~ codythompson$ ssh cs332t32@shell.ecs.fullerton.edu
cs332t32@shell.ecs.fullerton.edu's password:
Permission denied, please try again.
cs332t32@shell.ecs.fullerton.edu's password:
Last failed login: Mon Apr 27 14:43:42 PDT 2020 from ip68-5-59-22.oc.oc.cox.net on ssh:notty
There was 1 failed login attempt since the last successful login.
Last login: Tue Mar 31 11:43:47 2020 from ip68-5-59-22.oc.oc.cox.net

Linux CentOS
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

              *** Welcome To ECS - CS Shell Server ***
          *** California State University at Fullerton ***
               *** Department of Computer Science ***

          The system is running CentOS Linux release 7.5.1804 (Core)
		 You are logged in as cs332t32

  ==================================================================

   This system follows rules and policy provided by CSUF campus.
   By using this system you expressly consent to all rules and
   policies which govern this system.

   This system accessed from it are for official use as authorized
   by UPS 103.004 COMPUTING FACILITIES USE POLICY

   All other use is prohibited. All information on this computer may
   be monitored by authorized personnel for official purposes.
   Access or use of this system by any person constitutes consent to
   this policy.

  ==================================================================

-bash-4.2$ ls -l
total 4
drwx-----x. 3 cs332t32 cs332t 4096 Mar 31 13:17 homepage
-bash-4.2$ cd homepage
-bash-4.2$ ls -l
total 12
-rw-r--r--. 1 cs332t32 cs332t 1782 Mar 31 11:43 database_create.txt
-rw-r--r--. 1 cs332t32 cs332t 1649 Mar 31 12:21 index.php
-rw-r--r--. 1 cs332t32 cs332t  414 Mar 31 13:17 README.md
-bash-4.2$ mysql -h mariadb -u cs332t32 -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 181024
Server version: 5.5.60-MariaDB MariaDB Server

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> use cs332t32;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
MariaDB [cs332t32]> select * from *;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*' at line 1
MariaDB [cs332t32]> show tables
    -> ;
+--------------------+
| Tables_in_cs332t32 |
+--------------------+
| COURSE             |
| DEPT               |
| ENROLL             |
| MINOR              |
| PROF               |
| SECTION            |
| STUDENT            |
+--------------------+
7 rows in set (0.00 sec)

MariaDB [cs332t32]> select * from PROF;
+-----------+-----------+-------------+------+--------+-------------------+---------------+-------+-------+-----------+----------+
| SSN       | FNAME     | LNAME       | SEX  | SALARY | STADDR            | CITY          | STATE | ZIP   | AREA_CODE | TELE_NUM |
+-----------+-----------+-------------+------+--------+-------------------+---------------+-------+-------+-----------+----------+
| 223353784 | Squidward | Squidle     | M    |  45000 | 69 Pineapple Way  | Bikini Bottom | Oc    | 82192 |       384 |  3837547 |
| 274728374 | Spongebob | Squarepants | M    |  99000 | 420 Pineapple Way | Bikini Bottom | Oc    | 82722 |       384 |  3948847 |
+-----------+-----------+-------------+------+--------+-------------------+---------------+-------+-------+-----------+----------+
2 rows in set (0.00 sec)

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

        $SQL = "SELECT * FROM PROF";
        $result = mysql_query($SQL, $link);
        $row = mysql_fetch_array($result);
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
<p> <?php echo $row['FNAME']; ?> </p>
</div>
</div>
-- INSERT --
