<DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="javascript.js"></script>
	</head>
</html>
<?php
require("bird.php");
require("pigeon.php");
require("penquin.php");

//$bird = new Bird(true,2);
//$pigeon = new Pigeon(true,2);
$penquin = new Penquin(false,2);

//echo $pigeon->legCount;

if($penquin->canFly()){
	echo 'Can Fly';
}