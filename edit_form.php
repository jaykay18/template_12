<?php
require_once('base.php');
include('password.php');
?>
<html>
	<head>
	<title>Form Edit Data</title>
	</head>
	 
	<body>
	<table border=1>
	  <tr>
	    <td align=center>Form Edit Employees Data</td>
	  </tr>
	  <tr>
	    <td>
	      <table>
	      <?php
	      mysql_connect("localhost","root","abcd"); //database connection
		  mysql_select_db("my_db");
	      $uid = $row['uid'];
		  $order = "SELECT * FROM master_data WHERE uid=''";        
	      $result = mysql_query($order);
	      $row = mysql_fetch_array($result);
	      ?>
	      <form method="post" action="edit_data.php">
	      <input type="hidden" name="id" value="<? echo "$row[uid]"?>">
	        <tr>       
	          <td>Name</td>
	          <td>
	            <input type="text" name="party"
	        size="40" value=<?php echo "$row[Party_Name]"?>>
	          </td>
	        </tr>
	        <tr>
	          <td>Description</td>
	          <td>
	            <input type="text" name="description" size="40"
	          value=<?php echo "$row[Description]"?>>
	          </td>
	        </tr>
			<tr>
	          <td>Forum</td>
	          <td>
	            <input type="text" name="forum" size="40"
	          value=<?php echo "$row[Forum]"?>>
	          </td>
	        </tr>
	        <tr>
	          <td align="right">
	            <input type="submit"
	          name="submit value" value="Edit">
	          </td>
	        </tr>
	      </form>
      </table>
	    </td>
	  </tr>
	  </table>
	</body>
	</html>