<?php
# Compare arrays, and returns the differences (compare values only)

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print"<pre>";
print_r($result);
print"</pre>";
?>