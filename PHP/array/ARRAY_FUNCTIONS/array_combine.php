<?php
# Creates an array by using the elements from one "keys" array and one "values" array

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print"<pre>";
print_r($c);
print"</pre>";
?>