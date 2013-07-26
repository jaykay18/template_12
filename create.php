<?php
$con=mysqli_connect("localhost","root","abcd","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // Create table
$sql="CREATE TABLE EMP_INFO2(firstname CHAR(30),lastname CHAR(30),Empcode INT,EmailID CHAR(30))";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table EMP_INFO2 created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }?>
  <html>
  <body>
  <form action="index.html" method="POST">
  </form>
  </body>
  </html>