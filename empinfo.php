<html>
<body>
<h1>
You have successfully registered.
</h>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","abcd","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO EMP_INFO2 (firstname, lastname, empcode, EmailID)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[empcode]','$_POST[EmailID]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>