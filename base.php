<?php
/*File containing database server connection info. 
$dbinfo is the variable created. So use it directly.

$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password'); 
*/

try {
$dbinfo = new PDO('mysql:host=localhost;dbname=my_db;charset=utf8','root','abcd'); //Change your server details here!
session_start(); //Starting session on base file directly. Need not call it anywhere else.
}
catch(PDOException $ex){
		echo "Error in connection configuration";	
	}
?>