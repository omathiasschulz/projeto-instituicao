<?php 


require_once('../helpers/Conversor.php');

$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache"); 
/* Os readers acima dizem para nao usar o cache do browser! */ 

$n = $_GET["n"]; //pegar a variavei enviada

$json_data = Conversor::getDadosAlunoJSONComOID($n);

echo $json_data; // agora vamos "retornar" o valor, para isso escrevemos ele em tela 

?> 