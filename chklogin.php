<?php
require_once('base.php');
include('password.php'); //including password.php for bcrypt hash generation.

if(!empty($_POST['username']) && !empty($_POST['password']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$sqlsethash= $dbinfo->prepare("SELECT * FROM login WHERE uname =?");
		$sqlsethash->execute(array($username));
		$resultsethash = $sqlsethash->fetchALL();
			if ($resultsethash)
			{
				foreach($resultsethash as $rowsethash)
				{
					$hash = $rowsethash['upass'];
		}
	}
	else{
				echo "<p>User account does not exist.</p>";
				die();		
		}
		if (password_verify($password, $hash)) {
  		//Valid    
		$sql= $dbinfo->prepare("SELECT * FROM login WHERE uname =? AND upass =?");
		$sql->execute(array($username,$hash));
		$result = $sql->fetchALL();
			if ($result)
			{
				foreach($result as $row)
				{
		   $email = $row['uemail']; 
				$lastlogin = $row['ulogintime'];
				$uid = $row['uid'];
				$ustatus=1;
				$ulogintime=date("d-m-Y H:i:s");   
				$sql = $dbinfo-> prepare("UPDATE login SET ulogintime=?,ustatus=?");
		 		$sql->execute(array($ulogintime,$ustatus));
				}
			$_SESSION['uname'] = $username;
			$_SESSION['uid'] = $uid;
			$_SESSION['uemail'] = $email;
			$_SESSION['ulastlogintime']=$lastlogin;
			$_SESSION['LoggedIn'] = 1;
			echo "<h1>Success</h1>";
			echo "<p>Redirecting...please wait!</p>";
			header("location:index.php");
			} 
			else
			{
			echo "Incorrect login or password";
			}
	}
	else
	{
	echo "Oops, invalid password";
	}
}
else
{
	echo "Could not catch values";
}
?>
