<?php
	require_once('base.php');
include('password.php');
//edit_data.php
	include "db.inc.php";
    $order = "UPDATE data_employees
	          SET Party_Name='$party',
	              Description='$description',
				  Forum=.$forum'
				  
	          WHERE
	          uid=''";
	mysql_query($order);
	header("location:edit.php");
	?>