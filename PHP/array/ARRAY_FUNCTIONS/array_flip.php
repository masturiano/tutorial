<?php
# Flip all keys with their associated values in an array

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print"<pre>";
print_r($result);
print"</pre>";
?>