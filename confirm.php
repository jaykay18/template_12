<html>
<head>
<meta http-equiv="refresh" content="0; url=http://localhost/template_12/phplogin.php"> 
</head>
</html>
<?php
$con=mysqli_connect("localhost","root","abcd","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO master_data (Party_Name, Description, Liability_Year, Forum, Amount_Pending)
VALUES
('$_POST[Party_Name]','$_POST[Description]','$_POST[Liability_Year]','$_POST[Forum]','$_POST[Amount_Pending]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);
?>