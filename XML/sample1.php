<?php
$xml = simplexml_load_file('sample1.xml');

echo $xml->producer[0]->name.' is '.$xml->producer[0]->age . '<br/>';
echo "<br/>";

/*
* Looping
*/
foreach($xml->producer as $producer){
	echo $producer->name.' is '.$producer->age. '<br/>';
}
?>