<?php
/*File containing database server connection info. 
$db_connect is the variable created. So use it directly.

$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password'); 
*/

try {
$db_connect = new PDO('mysql:host=localhost;dbname=my_db;charset=utf8','test_code','test_code'); //Change your server details here!
}
catch(PDOException $ex){
		echo "Error in connection configuration";	
	}
?>