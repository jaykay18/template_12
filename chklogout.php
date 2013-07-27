<?php 
require_once('base.php');
$username=$_SESSION['uname'];
$ustatus=0;
$lastlogouttime=date("d-m-Y H:i:s");
$sql = $dbinfo-> prepare("UPDATE login SET ustatus=?, ulastlogouttime=? where uname=?");
try{
$sql->execute(array($ustatus,$lastlogouttime,$username));
$_SESSION = array(); 
session_destroy(); 
}
catch(PDOException $ex)
	{
		echo "Error logging out!";
	}

?>
<h1>Please wait!</h1>
<meta http-equiv="refresh" content="2;index.php">
