<?php

$globalvar = 1;
function test() {
	global $globalvar;
	$globalvar++;
	print "Value of global variable is $globalvar";
}
test();

echo "<br/>";

function test2(){
	global $globalvar;
	$globalvar++;
	print "Value of global variable is $globalvar";
}
test2();

?>