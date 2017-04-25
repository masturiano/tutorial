<?php
# Fill an array with values, specifying keys

$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"blue");
print"<pre>";
print_r($a1);
print"</pre>";
?>