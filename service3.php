<?php
include('lib/nusoap.php');
$client = new nusoap_client('https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl','wsdl');
$err = $client->getError();
if ($err) {	echo 'Error en Constructor' . $err ; }
$param = array('plengua' => 'C','pcurso'=> '2011-12','pcoddep'=>'B142','pcodest'=>'');
$result1 = $client->call('wsasidepto', $param);
print_r($result1);
?>