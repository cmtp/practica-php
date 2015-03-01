<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultado</title>
</head>
<body>
	<?php 
		$nom = $_GET['nombre'];
		$edad = $_GET['edad'];
		if ($edad >= 18) {
			echo $nom." Es Mayor de Edad";
		}
		else {
			echo $nom."Es Menor de Edad";
		}
	 ?>
</body>
</html>