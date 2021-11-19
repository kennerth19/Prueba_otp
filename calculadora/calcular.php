<?php 

	$valor_1 = $_POST["v1"];
	$valor_2 = $_POST["v2"];

	echo "<h1>La suma es:";
	echo $valor_1 + $valor_2;

	echo "<h1>La resta es:";
	echo $valor_1 - $valor_2;

	echo "<h1>La multiplicacion es:";
	echo $valor_1 * $valor_2;

	echo "<h1>La division es:";
	echo $valor_1 / $valor_2;

	echo "<h1>La raiz es:";
	echo sqrt($valor_1+$valor_2);

	$porcentaje = ($valor_1*$valor_2) / 100;
	echo "<h1>El " . " $valor_1 " . "% de:" . " $valor_2 " . " es:" . round($porcentaje);

	echo "<br><br><a href='index.php'>Volver</a>";

?>

