<?php
$con=mysqli_connect("localhost","root","abcd","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM master_data");

echo "<table border='1'>
<tr>
<th>Party Name</th>
<th>Description</th>
<th>Year of Liability</th>
<th>Forum</th>
<th>Pending Amount</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Party_Name'] . "</td>";
  echo "<td>" . $row['Description'] . "</td>";
  echo "<td>" . $row['Liability_Year'] . "</td>";
  echo "<td>" . $row['Forum'] . "</td>";
  echo "<td>" . $row['Amount_Pending'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?> 