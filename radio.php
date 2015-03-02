<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Control Radio Button php</title>
</head>
<body>
	<form action="resp-radio.php" method="get">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="name">
		<input type="radio" name="grado" id="" value="ne">
		<label for="grado">No tiene Estudios</label>
		<input type="radio" name="grado" id="" value="primarios">
		<label for="grado">Primaria</label>
		<input type="radio" name="grado" id="" value="secundarios">
		<label for="grado">Secundarios</label>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>