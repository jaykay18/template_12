<?php
$con=mysqli_connect("localhost","root","abcd","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if(isset($_POST['username']) and isset($_POST['password']))
	{
		$sql="SELECT user_id, username, password FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
		if ($result = mysqli_query($con,$sql))
  {
	$row = mysqli_fetch_array($result);
	if(isset($row))
		print_r('Welcome '.$row['username']);
  }
	}
	?>