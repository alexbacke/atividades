<?php

$mes1= 0;
$mes2= 0;
$mes3= 0;
$media = 0;

$mes1 = $_POST["mes1"];
$mes2 = $_POST["mes2"];
$mes3 = $_POST["mes3"];

$media = ($mes1+$mes2+$mes3) / 3;
echo"Sua média da conta R$ " . $media . "<br/>";

$media = $media/2.50;
echo"Sua média de consumo é " . $media ."m³ <br/>;

echo "A previsão da sua próxima conta com o aumneto da tarifa é de R$ " ($media*3.50);

?>
