<?php

function validarDia($dia,$limite){
	if ($dia < 1 or $dia > $limite){
		echo "Dia inválido";
 		return false;
   }
	return true;
}

function validarData($dia,$mes,$ano){
	$resultado = true;

	switch ($mes){
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			$resultado = validarDia($dia,31);
			break;
	
		case 4:
		case 6:
		case 9:
		case 11:
 			$resultado = validarDia($dia,30);
			break;
		
		case 2:
		if (($ano%4 == 0) and ($ano%100 != 0) or ($ano%400 == 0)){


			$resultado = validarDia($dia,29);
		}
		else{ 
			$resultado = validarDia($dia,28);
		}
			break;
	
		default:
			echo "Mês inválido";
			return false;
	}
	
	return true;
}



?>
