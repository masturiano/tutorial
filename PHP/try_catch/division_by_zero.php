<?php
function inverse($x){
	if(!$x){
		throw new Exception('Division by zero.');
	}
	return 1/$x;
}

try {
	echo inverse(5) . "\n";
	echo '<br/>';
	echo inverse(0) . "\n";

}
catch (Exception $e){
	echo 'Caught exception: ', $e->getMessage(), "\n";
}

echo '<br/>';

// Continue execution
echo "Hello World\n";

echo '<br/>';
?>