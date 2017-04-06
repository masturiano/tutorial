<DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="javascript.js"></script>
	</head>
</html>
<?php

// Booleans = True or False
// Integers = Number
// Floating point number = Number with decimal points
// Strings = Anything
// Arrays = Map
// Resources = File handle
// NULL  = No or emptpy
// Callbacks = Callable function

// Objects = 

$object = new stdClass; // New standard class
$object->name = "Mydel";
$object->names = ["Mydel","Jayzelle","Arann","Nino"];

echo $object->name;
echo "<br/>";

foreach($object->names as $name){
	echo $name . "<br/>";
}
?>