<?php
# Send the values in an array to a user-defined function and return a string

function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");

print"<pre>";
print_r(array_reduce($a,"myfunction"));
print"</pre>";
?>