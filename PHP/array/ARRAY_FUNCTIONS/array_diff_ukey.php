<?php
# Compare the keys of two arrays (using a user-defined key comparison function), and return the differences

function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_diff_ukey($a1,$a2,"myfunction");
print"<pre>";
print_r($result);
print"</pre>";
?>