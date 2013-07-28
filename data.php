<?php
include('base.php');
?>
<html>
<head> 
<link href="css/master.css" rel="stylesheet" type="text/css">
<body>
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
  <form id="update data" action="confirm.php" method="post">
<fieldset>
<legend>Contingency Liability</legend>
<p><label class="field" for="Name of the Party">Name of the Party: </label><input type="text" name="party" class="change" /></p>
<p><label class="field" for="Description">Description: </label><input type="text" name="description" class="change" /></p>
<p><label class="field" for="Year of liability">Year of liability: </label><input type="text" name="liability" class="change" /></p>
<p><label class="field" for="Forum">Forum: </label><input type="text" name="forum" class="change" /></p>
<p><label class="field" for="Pending Amount">Pending Amount: </label><input type="text" name="amount_pending" class="change" /></p>
<input type="submit" value="Update">
</fieldset>
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
</body>
</html> 