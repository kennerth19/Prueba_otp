<?php
	
	$matriz = array(
		array(1,2,3),
		array(4,5,6),
		array(9,8,9)
	);

	function retornar_valor_absoluto($argumento){

		$matriz = $argumento;

		$diagonal_izq =  $matriz[0][0] + $matriz[1][1] +  $matriz[2][2];
		$diagonal_der = $matriz[0][2] + $matriz[1][1] + $matriz[2][0];

		return abs($diagonal_izq - $diagonal_der);
	}

	echo retornar_valor_absoluto($matriz);
?>