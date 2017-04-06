<?php
$number = array('one','two','three');
echo 'Number ' . $number[0];
echo '<br/>';
echo 'Number ' . $number[1];
echo '<br/>';
echo 'Number ' . $number[2];
echo '<br/>';
// LOOP THROUGH INDEXED ARRAY

$array = array('one','two','three');
$array_count = count($array);
for($i=0;$i<$array_count;$i++){
	echo $array[$i];
	echo '<br/>';
}
?>
