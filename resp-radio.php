<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Radio Respuesta</title>
</head>
<body>
	<?php 
		$nom = $_REQUEST['nombre'];
		$grado = $_REQUEST['grado'];
		echo $nom."<br>";
		if ($grado == "ne") {
			echo "No tiene estudios";
		}
		elseif ($grado == "primarios") {
			echo "Estudios Primarios";
		}
		else {
			echo "Estudios Secundarios";
		}
	 ?>
</body>
</html>