<?php
include('lib/nusoap.php');
$client = new nusoap_client('http://www.dneonline.com/calculator.asmx?WSDL','wsdl');
$err = $client->getError();
if ($err) {	echo 'Error en Constructor' . $err ; }
$param = array('intA' => '10','intB' => '2');
$suma = $client->call('Add', $param);
$resta = $client->call('Subtract', $param);
$multiplicacion = $client->call('Multiply', $param);
$division = $client->call('Divide', $param);
print_r($suma);
print_r($resta);
print_r($multiplicacion);
print_r($division);
?>

