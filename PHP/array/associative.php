<?php
$number['one'] = 1;
$number['two'] = 2;
$number['three'] = 3;

echo 'Number ' . $number['one'];
echo '<br/>';
echo 'Number ' . $number['two'];
echo '<br/>';
echo 'Number ' . $number['three'];
echo '<br/>';

// LOOP THROUGH ASSOCIATIVE ARRAY

$array = array('one'=>'1','two'=>'2','three'=>'3');
foreach($array as $key => $value){
	echo $key . '=' . $value;
	echo '<br/>';
}
?>