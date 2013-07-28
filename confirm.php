<?php
include('base.php'); 
?>
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['uname']))
	{
if(!empty($_POST['party']) && !empty($_POST['description']) && !empty($_POST['liability']) && !empty($_POST['forum']) && !empty($_POST['amount_pending']))
{
	$party=$_POST['party'];
	$des=$_POST['description'];
	$lia=$_POST['liability'];
	$forum=$_POST['forum'];
	$ap=$_POST['amount_pending'];
	$uid=$_SESSION['uid'];
	$sql=$dbinfo->prepare("INSERT INTO master_data(uid,Party_Name,Description,Liability_Year,Forum,Amount_Pending) VALUES(?,?,?,?,?,?)");
	$sql->execute(array($uid,$party,$des,$lia,$forum,$ap));
	if($sql)
	{
		echo "Successfully Added. <a href=\"show.php\">Check Added Data</a>. ";
		}
		else
		{
			echo "Something went wrong while adding data.";
			}
}
	else
	{
		echo "Error Catching Data";
		}
}	
		else {
			   echo "You are not authorized to do this.";
		}
?>