
<?php

//echo phpinfo();
//$host = "localhost"; 
//$user = "";
//$pass = "";
//$db_name ="learning";
$host = "localhost"; 
$user = "root";
$pass = "admin123";
$db_name ="small_cms";

$connect = mysqli_connect($host, $user, $pass, $db_name);

if(!$connect){
	echo "could not connect to server <br>";
	die("Connection failed: " . mysqli_connect_error());

} else {
	echo "Connect to server Successfully! <br>";
$db = mysqli_select_db($connect, $db_name);

if(!$db){
echo "could not select to DB {$db_name}<br>";
	die("Select to DB failed: " . mysqli_error());
	
	
}else {
	
	echo "Select to DB {$db_name} Successfully! <br>";
}

	
}
 
?>
