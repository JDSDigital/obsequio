<?php

	define('DB_HOST', '127.0.0.1');
	define('DB_NAME', 'obsequio');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');

$db = "./sql.csv";

ob_start();

$db = fopen("$db", "r");

do {
	$line = fgets($db);
	$feed = explode(";", $line);

	$list = [
		"nombre" => $feed[0],
		"apellido" => $feed[1],
		"cedula" => $feed[2],
		"genero" => $feed[3],
		"dob" => $feed[4],
		"tlf1" => $feed[5],
		"tlf2" => $feed[6],
		"mail" => $feed[7],
		"empresa" => $feed[8],
		"subgrupo" => $feed[9]
	];

		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		if ($mysqli->connect_error) {
			die("Connection failed: " . $mysqli->connect_error);
		}

		$query = "INSERT INTO asegurados (nombre, apellido, cedula, genero, dob, tlf1, tlf2, mail, empresa, subgrupo) VALUES ('";
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
