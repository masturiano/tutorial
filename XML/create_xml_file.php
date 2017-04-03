<?php
$xml = new DomDocument("1.0","UTF-8");

$container = $xml->createElement("container");
$container = $xml->appendChild($container);

$sale = $xml->createElement("sale");
$sale = $container->appendChild($sale);

$item = $xml->createElement("item","Television");
$item = $sale->appendChild($item);

$price = $xml->createElement("price","$100");
$price = $sale->appendChild($price);

$xml->preserveWhiteSpace = true;
$xml->formatOutput = true;
$string_value = $xml->saveXml();
$xml->save('create_xml_file_output.xml');
?>