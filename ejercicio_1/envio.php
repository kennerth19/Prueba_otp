<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

	$db_host="localhost";
	$db_usuario="root";
	$db_nombre="kennerth_salazar";
	$db_contra="";

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$lenguajes = $_POST["lenguajes"];

	$conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

		if(mysqli_connect_errno()){

			echo "Error al conectar a la BD";
			exit();
		}

		mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra BD");

		mysqli_set_charset($conexion,"utf8");

		$consulta = "INSERT INTO programador (nombre, apellido, cedula, lenguajes, fecha_de_creacion) VALUES ('$nombre', '$apellido', '$cedula', '$lenguajes', '')";

		if (mysqli_query($conexion,$consulta)){
			echo "Registro ingresado";
			echo "<br><a href='index.php'>Introducir otro registro</a>";
		}else{
			echo "error usuario ya registrado";
			echo "<br><a href='index.php''>volver</a>";
		}

		mysqli_close($conexion);

?>


</body>
</html>
