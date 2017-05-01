<?php
$number1 = 2;
$number2 = 2;
/**
* Passing by reference
*
* @param integer $num1
* @param integer $num2
* @author Mydel
* @return result  
*/
function multiply(&$num1,$num2){
	$num1 = 3;
	($num1 * $num2);
}
multiply($number1,$number2);
echo $number1;
echo "<br/>";

echo "<hr>";

$myArray = array(1,2,3);

/**
* Passing by reference with array parameter
*
* @param integer $array
* @author Mydel
* @return result  
*/
function setArrayFirstItemToZero(&$myArray){
	$myArray[0] = 0;
}
setArrayFirstItemToZero($myArray);
echo $myArray[0];
echo "<br/>";
?>