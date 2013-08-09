<?php
include('base.php');
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['uname']))
	{
		$uid = $_SESSION['uid'];
		if($_POST['dataid']!=NULL && $_POST['partyname']!=NULL && $_POST['description']!=NULL && $_POST['liability']!=NULL && $_POST['forum']!=NULL && $_POST['amountpend']!=NULL)
		{
			$dataid=$_POST['dataid'];
			$party=$_POST['partyname'];
			$desc=$_POST['description'];
			$liability=$_POST['liability'];
			$forum=$_POST['forum'];
			$amount_pend=$_POST['amountpend'];
				try
				{ 
					$sql = $dbinfo-> prepare("UPDATE master_data SET Party_Name=?,Description=?,Liability_Year=?,Forum=?,Amount_Pending=? WHERE dataid=? and uid=?");
 					$sql->execute(array($party,$desc,$liability,$forum,$amount_pend,$dataid,$uid));
 					echo "<p>Updated the values! <a href=\"editdata.php\"> << Click here To Update More Values!</a></p>";
				}
					catch(PDOException $ex)
					{
					echo "There was error updating the row. <a href=\"editdata.php\"> << Go Back To Try again</a>".$ex;
					}
			}
			else
			{
				echo "Oops there was an error updating data.";
				}
		}
		else
		{
			echo "You are not authorized to access this page. Move on now.";			
			}