<?php
# Return a sorted array in ascending order

$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);

print"<pre>";
print_r($a);
print"</pre>";
?>