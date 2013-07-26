<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>
jay
</title>
</head>
<body>

<form action ="jay.php" method ="POST" >
firstname:<input  size = "25" type="text" name="name" placeholder="Your Name" required = "true" />
</form>
<?php
$con = mysql_connect('localhost', 'root', 'abcd',);
$db = mysql_select_db('my_db');
$name = $_POST['name'];
$query = "INSERT INTO persons(firstname) VALUES('$firstname')";
if (mysql_query($sql))
{
echo "code successful";
}
else
{
echo "Error ";
}

?>

</body>
</html>