<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Deportes</title>
</head>
<body>
	<?php 
		$nom = $_REQUEST["nombre"];
		echo $nom."<br>";
		if (isset($_REQUEST["futbol"])) {
			echo "Futbol<br>";
		}
		if (isset($_REQUEST["basket"])) {
			echo "Basket<br>";
		}
		if (isset($_REQUEST["voley"])) {
			echo "Voley<br>";
		}
	 ?>
</body>
</html>