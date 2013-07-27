<?php
include('base.php');
?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>IOCL Portal</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
  <body>
<!--<form action="phplogin.php" method="POST">
<div align="center">
Employee Code:<input type="text" name="ename"><br>
Password:<input type="password" name="pass"><br>
<input type="submit" value="Submit">-->
  <div class="wrapper">
<div class="left-gap1"><img src="images/spacer.gif" alt="#" border="0"
 height="1" width="6"></div>
<div class="main">
<div class="header">
<div class="nav-area">
<ul class="nav">
    </a></li>
</ul>
</div>
<div class="banner-area"><img src="images/IOC.jpg" alt="#"
 border="0"></div>
</div>
<div class="mid">
<div id="slick-login">
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
    	echo "<a href=\"user_action.php\">Update/Add Data</a>";    
?>
<p><a class="button" href="chklogout.php">Log out!</a></p></div>

<?php   
	}
 else
  	{
		 ?>
			<form name="hongkiat" id="slick-login" method="post" action="chklogin.php">
																					<section id="aligned">
																				<p>		<input type="text" name="username" id="username" placeholder="Your username" autocomplete="off" tabindex="1" class="txtinput">
																						<input type="password" name="password" id="userpass" placeholder="Your password" autocomplete="off" tabindex="2" class="txtinput"></p>
																			<section>
																			<section id="buttons">
																		<p>				<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
																						<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Log In">
																						
																						<br style="clear:both;"></p>
																					</section>
																		</form>
<?php
	}
?>

<div class="mid-left">

    </a></li>
</ul>
</div>
<div class="mid-right">
<h1>Welcome to IOCL online portal</h1>
</div>
</div>
<div class="footer">
<!--DO NOT Remove The Footer Links-->
<p class="copyright">Copyright 2013. Designed by <a target="_blank"
 href="http://www.itmindia.edu/">itmu</a>
<!--DO NOT Remove The Footer Links-->
</p>
</div>
</div>
<div class="right-gap1"><img src="images/spacer.gif" alt="#" border="0"
  ></div>
</div>
</body>
</html>
