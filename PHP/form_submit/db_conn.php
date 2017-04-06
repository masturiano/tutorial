<?php
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','eps_consultant');
define('TABLE','tb_info');

// CREATE CONNECTION
$conn = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);
if(!$conn){
	die("Connection status: failed" . $conn->connect_error);
}
else{
	echo "Connection status: connected";
	echo "<br/>";
}
?>

