<?php

$promocaoB = 0;
$promocaoE = 0;
$chocolateB = 0;
$chocolateE = 0;
$contagem = 0;

$chocolateB = $_POST["chocolatesB"];
$chocolateE = $_POST["chocolatesE"];


$contagem = 3;
while ($contagem <= $chocolateE){
	$promocaoB = $promocaoB +1;
	$contagem = $contagem +3;
}	
$contagem = 2;
while ($contagem <= $chocolateB){
	$promocaoE = $promocaoE +1;
	$contagem = $contagem +2;
}
$contagem = 5;
while ($contagem <= ($chocolateB + $chocolateE)){
	$promocaoB = $promocaoB +1;
	$contagem = $contagem +5;
}

echo "chocolate escuro: " . ($chocolateE + $promocaoE) . "<br/>";
echo "chocolate branco: " . ($promocaoB + $promocaoB) . "<br/>";



?>
