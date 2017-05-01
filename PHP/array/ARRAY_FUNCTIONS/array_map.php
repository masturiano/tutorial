<?php
# Send each value of an array to a function, multiply each value by itself, and return an array with the new values

function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
?>