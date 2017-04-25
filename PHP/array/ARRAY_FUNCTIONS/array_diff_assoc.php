<?php
# Compare the keys and values of two arrays, and return the differences

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_diff_assoc($a1,$a2);
print"<pre>";
print_r($result);
print"</pre>";
?>