# CPSC332TermProj
Term Project for CPSC 332 Spring 2020

______________________________________________________________________________________________________________________
## Website URL:
http://ecs.fullerton.edu/~cs332t32/

______________________________________________________________________________________________________________________
### Group Members:
 * Cody Thompson 
 * Tracy Tonnu
 * Russel Kah


______________________________________________________________________________________________________________________
### Connecting to the CSUF server:
In an UNIX console type the following:
  * cs332t32@shell.ecs.fullerton.edu
  * Enter the password for user 'cs332t32' ( consult me for the password )

______________________________________________________________________________________________________________________
### Logging into the MySQL Server:
After connecting to the CSUF server:
  * navigate to the homepage directory ( cd homepage )
  * Log into the mysql server ( mysql -h mariadb -u cs332t32 -p )
  * Enter the password for user cs332t32 ( Consult me for the password; It's the same password used for the shell login )
  * Once logged into the MySQL server, select the cs332t32 database ( use cs332t32; ( the ";" is necessary for all statements in the MySQL server ))
  * You may now submit any query using SQL statements
  
_____________________________________________________________________________________________________________________
### Inserting Values into Tables:
After logging into the MySQL server, abide by the following template:
  * show tables; ( This will display all tables within the cs332t32 database )
  ![Alt text](/image3.png?raw=true "Show Tables")
  * show columns from <table_name_here>; ( This will display the format of the destination table for proper value insertion )
  ![Alt text](/image2.png?raw=true "Show Database")
  * insert into <table_name_here> values ('value1', 'value2', ... , 'valueN'); ( Using the above result as a guide )
  * select * from <table_name_here>; ( To review the addition )
  ![Alt text](/image.png?raw=true "Insert Values")

  **NOTE: All table names and attributes are in all caps.  SQL statements are case sensitive when refering to table names and attributes.**
