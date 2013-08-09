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
	 echo "<tr>";
  echo "<td>" . $row['Party_Name'] . "</td>";
  echo "<td>" . $row['Description'] . "</td>";
  echo "<td>" . $row['Liability_Year'] . "</td>";
  echo "<td>" . $row['Forum'] . "</td>";
  echo "<td>" . $row['Amount_Pending'] . "</td>";
  echo "<td><a href=\"edit_form.php?id=$row[Party_Name]\">Edit</a></td></tr>"; //adding edit button
  }
echo "</table>";
}
/*else
{
	echo "Error fetching data";
	}*/
}
else
{
	echo "You are not authorized to access this page.";
	}
?> 