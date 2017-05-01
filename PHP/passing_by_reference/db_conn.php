<?php
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','tutorial');

// CREATE CONNECTION
global $conn;
$conn = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);
if(!$conn){
	die("Connection status: failed" . $conn->connect_error);
}
else{
	echo "Connection status: connected";
	echo "<br/>";
}
?>

