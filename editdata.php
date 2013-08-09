<?php
include('base.php');
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['uname']))
	{
		$uid = $_SESSION['uid'];
		
echo "<table border='1'>
<tr>
<th>Party Name</th>
<th>Description</th>
<th>Year of Liability</th>
<th>Forum</th>
<th>Pending Amount</th>
</tr>";
$sql= $dbinfo->prepare("SELECT * FROM master_data WHERE uid =?");
		$sql->execute(array($uid));
		$result = $sql->fetchALL();
			if ($result)
			{
				foreach($result as $row)
				{
					$rownum=$row['dataid'];
					$desc_display=$row['Description'];
	 echo "<form name=\"form$rownum\" action=\"updaterow.php\" method=\"post\"><tr>";
	 echo "<input name=\"dataid\" type=\"hidden\" value=\"$rownum\" />";
  echo "<td><input name=\"partyname\" type=\"text\" value=". $row['Party_Name']." /></td>";
  echo "<td><input name=\"description\" type=\"textarea\" value=\"$desc_display\" /></td>";
  echo "<td><input name=\"liability\" type=\"text\" value=". $row['Liability_Year']." /></td>";
  echo "<td><input name=\"forum\" type=\"text\" value=". $row['Forum']." /></td>";
  echo "<td><input name=\"amountpend\" type=\"text\" value=". $row['Amount_Pending']." /></td>";
  echo "<td><input name=\"update\" type=\"submit\" value=\"Update\" /></td>";
  echo "</tr></form>";
  }
echo "</table>";
}
else
{
	echo "No data added by you.";
	}
}
else
{
	echo "You are not authorized to access this page.";
	}
?> 