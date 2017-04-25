<?php
# Compare the keys of two arrays, and return the differences

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print"<pre>";
print_r($result);
print"</pre>";
?>