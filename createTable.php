<?php
$servername = "localhost";
$username = "DBMSadmin";
$password = "DBMSpassPP";
$db_name = "dummy_data";

// Make a MySQL Connection
$con=mysqli_connect($servername, $username, $password, $db_name);
mysqli_select_db($db_name);

// Create a MySQL table in the selected database
mysqli_query($con, "CREATE TABLE dummy_data(
  id INT NOT NULL AUTO_INCREMENT, 
  PRIMARY KEY(id), 
  first_name VARCHAR(30), 
  last_name VARCHAR(30),  
  dob INT, 
  shoe_size INT, 
  waist_size INT)") or die(mysqli_error(test));  

echo "Table Created!";
mysqli_close($con);
?>