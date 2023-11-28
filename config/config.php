<?php

//The define() function is used to create constants in PHP, its declaring variable and using const todo it.
//here know we are trying to connect the html with the database using php.
//the try catch is more like if the try works fine its not going to run the catch, but if there is an error in the try it will run the catch. which is used in PHP for exception handling.
try{
// host, HOST is defined as "localhost", which typically represents the location of the database server.
define("HOST", "localhost");
//dbname, the database name
define("DBNAME", "coffee-blend");
//username of the database by default it is root
define("USER", "root");
//password of the database by default it its nothing no password
define("PASS", "");

//The $conn variable is used to create a new instance of the PDO (PHP Data Objects) class, which is a database access layer providing a uniform method of access to multiple databases.
//The new PDO(...) statement initializes a connection to the MySQL database.

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//PDO is a powerful extension that provides a data-access abstraction layer, allowing developers to work with different databases and standardize the way database connections are handled.
   //- It offers a consistent interface for querying and manipulating databases, with support for prepared statements and parameterized queries, enhancing security and performance.
  // - PDO supports various database management systems, including MySQL, PostgreSQL, SQLite, and more, making it a versatile choice for database interaction in PHP applications.

  /*Setting Error Handling Mode**:
   - This line of code sets the error handling mode for the PDO (PHP Data Objects) connection represented by the $conn variable.
   - The setAttribute() method is used to set an attribute on the PDO connection. In this case, it configures the error mode to PDO::ERRMODE_EXCEPTION.
   - When PDO::ERRMODE_EXCEPTION is set, PDO throws exceptions if an error occurs. This means that instead of returning error codes, PDO will throw a PDOException,
    providing error details and enabling better error handling within the application.*/
}
//PDOException is the specific exception class used by PDO to represent errors related to database connections, queries, or operations.
// When an error occurs within the PDO context, a PDOException object is thrown, carrying information about the nature of the error.
//the catch function is more like declaring and calling a function at the same time.
catch(PDOException $Exception){
  echo $Exception->getMessage();
}
