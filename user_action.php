<?php
include('base.php');
?>
<html>
<head>
<style>
body
{
background-color:#020441;
}
</style>
</head>
<body>
<div id="WELCOME" style="background-color:#f86611;height:700px;width:700px;float:left; position:absolute; left:600; top:200;">
<div align="center">
<h1><code>WELCOME</code></h1>
<?php 

   
 if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['uname']))
	{
		
		echo "<u>Account Status</u>";
		  if($_SESSION['ulastlogintime']==NULL)
		{
     echo "<p>Username: <i><strong>".$_SESSION['uname']."</strong></i><br> User Email: <i><strong>".$_SESSION['uemail']."</strong></i><br></p>";  
    }
    else
    {
    	echo "<p>Username: <i><strong>".$_SESSION['uname']."</strong></i><br> User Email: <i><strong>".$_SESSION['uemail']."</strong></i><br> Last Session Time: <i><strong>".$_SESSION['ulastlogintime']."</strong></i></p>";
    	}
    	?>
    	<form action="data.php" method="POST">
<input type="submit" value="Update Data">
</form>
<form action="show.php" method="post">
<input type="submit" value="View Data"><br>
</form>    

<p><a class="button" href="chklogout.php">Log out!</a></p></div>

<?php   
	}
 else
  	{
		 echo "Please login to access this page.";
		 ?>
		 
<?php
	}
?>


</div>
</div>
</body>
</html>