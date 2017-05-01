<?php
require_once('db_conn.php');
/**
* Passing by reference
*
* @param string $conn
* @param integer $id
* @param array &$array_fullname
* @author Mydel
* @return result  
*/
function getFullname($conn, $id, &$array_fullname){
	$select_info = "
		select 
			first_name,
			middle_name,
			last_name 
		from 
		php_passing_by_reference
		where
			id = {$id}
	"; // select table info
	$query_exec = mysqli_query($conn,$select_info); // execute querys	
	$row = mysqli_fetch_assoc($query_exec);
	$row_result = array(
		"first_name"=>$row['first_name'],
		"middle_name"=>$row['middle_name'],
		"last_name"=>$row['last_name']
	);
	$array_fullname = $row_result;
	return $array_fullname;
}

$id = 1;
getFullname($conn, $id, $array_fullname);
echo "<br/>";
print $array_fullname['first_name']." " .$array_fullname['middle_name']." ".$array_fullname['last_name'];
?>