<?php
  function buscar() {
  	define('DB_HOST', '127.0.0.1');
  	define('DB_NAME', 'obsequio');
  	define('DB_USER', 'root');
  	define('DB_PASSWORD', '');

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
    }

      $cedula = $_POST['cedula'];

      $query = "SELECT * FROM asegurados WHERE cedula='$cedula'";
    	$result = $mysqli->query($query);
    	$row = $result->fetch_assoc();

      if ($row['cedula'] === $cedula){
        do {
      		$array = [
              "nombre" => $row['nombre'],
          		"apellido" => $row['apellido'],
          		"cedula" => $row['cedula'],
          		"genero" => $row['genero'],
          		"dob" => $row['dob'],
          		"tlf1" => $row['tlf1'],
          		"tlf2" => $row['tlf2'],
          		"mail" => $row['mail'],
          		"empresa" => $row['empresa'],
          		"subgrupo" => $row['subgrupo']
      		];

      	} while ($row = $result->fetch_assoc());

        mysqli_close($mysqli);
        return $array;

      } else {
        mysqli_close($mysqli);
        return 0;
      }

    }
?>
