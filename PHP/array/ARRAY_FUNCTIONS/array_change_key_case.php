<?php
# Change all keys in an array to uppercase or lowercase

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

print"<pre>";
print_r(array_change_key_case($age,CASE_UPPER));
print"</pre>";

echo "<br/>";
echo "<hr>";

print"<pre>";
print_r(array_change_key_case($age,CASE_LOWER));
print"</pre>";
?>