<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
	<h1 class="font-mono text-x1 text-center">Formulario de registro</h1>

	<div>
		<div style="position: absolute; left: 20%;" class="grid grid-row-5 grid-cols-2 p-4 border-solid border-2 border-blue-500  w-7/12 font-mono absolute inset-x-1/4">	

			<form action="envio.php" method="POST">
				<label>
					nombre:
					<input type="text" name="nombre" required class="my-4 outline-black">
					<br>
				</label>
				<label>
					apellido:
					<input type="text" name="apellido" required class="border-solid my-4 outline-black">
					<br>
				</label>
				<label>
					cedula:
					<input type="text" name="cedula" required class="border-solid my-4 outline-black">
					<br>
				</label>
				<label>
					lenguajes
					<input type="text" name="lenguajes" required class="border-solid my-4 outline-black">
					<br>
				</label>
				<input type="submit" class="p-1 border-2 border-solid border-blue-500 p-4">
			</form>
		<div>
			<img src="registro.png">
		</div>
		</div>

	</div>

	

</body>
</html>