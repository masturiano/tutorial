<?php
# Return 5 elements and insert a value of "blue" to the new elements in the array

$a=array("red","green");

print"<pre>";
print_r(array_pad($a,5,"blue"));
print"</pre>";
?>