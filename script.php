<?php

	define('DB_HOST', '127.0.0.1');
	define('DB_NAME', 'obsequio');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'F0rb1dden');

$db = "./sql.csv";

ob_start();

$db = fopen("$db", "r");

do {
	$line = fgets($db);
	$feed = explode(";", $line);

	$list = [
		"titular" => $feed[0],
		"beneficiario" => $feed[1],
		"tipo" => $feed[2],
		"nombre" => $feed[3],
		"apellido" => $feed[4],
		"genero" => $feed[5],
		"dob" => $feed[6],
		"edad" => $feed[7],
		"parentesco" => $feed[8],
		"tlf1" => $feed[9],
		"tlf2" => $feed[10],
		"mail" => $feed[11],
		"desde" => $feed[12],
		"hasta" => $feed[13],
		"campana" => $feed[14],
		"subgrupo" => $feed[15],
		"empresa" => $feed[16],
		"consultas" => $feed[17],
	];

		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		if ($mysqli->connect_error) {
			die("Connection failed: " . $mysqli->connect_error);
		}

		$query = "INSERT INTO asegurados (titular, beneficiario, tipo, nombre, apellido, genero, dob, edad, parentesco, tlf1, tlf2, mail, desde, hasta, campana, subgrupo, empresa, consultas) VALUES ('";
		$query .= implode("', '", $list) ."')";


		echo $query ."<br /><br />";
			$sql = mysqli_query($mysqli, $query);
			if ($sql === TRUE) {
				echo "Exito";
			} else {
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}

			mysqli_close($mysqli);


} while (!feof($db));

fclose ($db);

ob_end_flush();

?>
