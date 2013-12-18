<?php
include "../lib/validaDatas.php";

$dataInicial = 0;
$dataFinal = 0;

$dataAtual = date("Y/m/d");


$dataInicial = $_POST["data1"];
$dataFinal = $_POST["data2"];

$vetor1 = explode("/", $dataInicial);
$vetor2 = explode("/", $dataFinal);
$data1Certa = validarData($vetor1[0],$vetor1[1],$vetor1[2]);

if(!$data1Certa){
	echo" (erros na data inicial)";
}

$data2Certa = validarData($vetor2[0],$vetor2[1],$vetor2[2]);

if(!$data2Certa){
	echo" (erros na data final)";
}
	

$di = str_replace("/","-",$dataInicial);
$dataInicial = strtotime($dataInicial);
$dataFinal = strtotime($dataFinal);


if ($dataAtual >= $dataInicial and $dataAtual <= $dataFinal){
	echo"Data boa para comprar!";
}
else{ $df = str_replace("/","-",$dataFinal);

$dataAtual = strtotime($dataAtual);

	echo"Data pessima para comprar!";
}

?>
