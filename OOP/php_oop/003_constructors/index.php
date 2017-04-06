<DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="javascript.js"></script>
	</head>
</html>
<?php
require("person.php");

$person = new person('Mydel',29);

echo $person->sentence();