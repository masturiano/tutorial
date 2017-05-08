<?php
try{
	$soup_client = new SoapClient("http://www.webservicex.net/stockqoute.asmx?WSDL");
	$vec = array("symbol"=>"DOX");
	$qoute = $soup_client->Getqoute($vec);
	echo $qoute->GetQuoteResult;
}
catch(SoapFault $exception)
{
	echo $exception->getMessage();
}
?>