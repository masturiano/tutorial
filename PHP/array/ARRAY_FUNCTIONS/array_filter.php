<?php
# Filter the values of an array using a callback function

$array=array("a","b",2,3,4,5);

/**
* Find the odd number
*
* @param array $var
* @author Mydel
* @return array
*/
function test_odd($var)
{
        // returns whether the input integer is odd
        return($var & 1);
}
print_r(array_filter($array,"test_odd"));

echo "<br/>";
echo "<hr>";
#-----------------------------------------------------------------------

/**
* Find the even number
*
* @param array $var
* @author Mydel
* @return array
*/
function test_even($var)
{
        // returns whether the input integer is even
        return(!($var & 1));
}
print_r(array_filter($array,"test_even"));

echo "<br/>";
echo "<hr>";
?>