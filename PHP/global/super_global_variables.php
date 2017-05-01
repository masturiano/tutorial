<?php

# $GLOBALS
$name = "Mydel-Ar A. Asturiano";
function testGlobalVar(){
	echo $GLOBALS['name'];

	global $arrayInsideFunction;
	$arrayInsideFunction = array('two','three');
}
testGlobalVar();

echo "<br>";

$name = array('one','two');
function testGlobalVarArray(){
	print"<pre>";
	print_r($GLOBALS['name']);
	print"</pre>";

	global $arrayInsideFunction;
	print"<pre>";
	print_r($GLOBALS['arrayInsideFunction']);
	print"</pre>";
}
testGlobalVarArray();

echo "<br/><hr>";


# $_SERVER;
echo $_SERVER['PHP_SELF']; # Get the path of program
echo "<br/>";
echo $_SERVER['GATEWAY_INTERFACE']; # Get gateway interface
echo "<br/>";
echo $_SERVER['SERVER_ADDR']; # Get the server address
echo "<br/>";
echo $_SERVER['SERVER_NAME']; # Get server name
echo "<br/>";


echo $_SERVER['REMOTE_ADDR']; # Get the remote ipaddress
echo "<br/>";



# $_REQUEST
# $_POST
# $_GET
# $_FILES
# $_ENV
# $_COOKIE
# $_SESSION

?>