<?php
/*
* CREATE XML FILE
*/
// $xml = new DomDocument("1.0","UTF-8");

// $container = $xml->createElement("container");
// $container = $xml->appendChild($container);

// $sale = $xml->createElement("sale");
// $sale = $container->appendChild($sale);

// $item = $xml->createElement("item","Television");
// $item = $sale->appendChild($item);

// $price = $xml->createElement("price","$100");
// $price = $sale->appendChild($price);

// $xml->preserveWhiteSpace = true;
// $xml->formatOutput = true;
// $string_value = $xml->saveXml();
// $xml->save('create_xml_file_output.xml');

/*
* EXAMPLE 1 - CURL XML
*/
// Initialize
$ch = curl_init();
// Set the url
$url = 'http://localhost/tutorial/php/curl/sample_001.php?type=xml';
// Set options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
// Execute
$data = curl_exec($ch);
// Close curl session  / free sources
curl_close($ch);
// Set your XML result
$xml  = new SimpleXmlElement($data, LIBXML_NOCDATA);
// Loop through the results
$cnt = count($xml->Result);
for($i=0; $i<$cnt; $i++){
	echo 'XML'. $xml->Result[$i]->item;
}
?>