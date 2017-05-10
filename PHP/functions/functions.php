<?php
/**
 * Short description for class
 *
 * Long description for class (if any)...
 *
 * @copyright  2017 Mydel
 * @license    Not available
 * @version    Release: Not available
 * @link       http://localhost/tutorial/php
 * @since      Class available since Release 1.0.0
 */ 
class Functions{
	
	public function fileRename($directory, $old_filename, $new_filename){
		if(file_exists($directory.$old_filename)){
			rename($directory.$old_filename, $directory.$new_filename);
		}
		else{
			echo "File not exist. ";
			echo "Error at line ". __LINE__;
			echo "<hr>";
		}
	}

	public function ipaddressLocal(){
		//$localIp = getHostByName(php_uname('n')); # PHP < 5.3.0
		$localIp = getHostByName(getHostName()); # PHP >= 5.3.0
		return $localIp;
	}
}

$functions = new Functions(); # Call function name Functions

$folder_location = "test_folder/";
$old_file_name = "old_filename.txt";
$new_file_name = "new_filename.txt";

$functions->fileRename($folder_location, $old_file_name, $new_file_name);

echo $functions->ipaddressLocal();
?>