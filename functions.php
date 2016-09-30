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

      $query = "SELECT * FROM asegurados WHERE beneficiario='$cedula'";
    	$result = $mysqli->query($query);
    	$row = $result->fetch_assoc();

      if ($row['beneficiario'] === $cedula){
        do {
      		$array = [
              "titular" => $row['titular'],
              "beneficiario" => $row['beneficiario'],
              "tipo" => $row['tipo'],
              "nombre" => $row['nombre'],
          		"apellido" => $row['apellido'],
          		"genero" => $row['genero'],
          		"dob" => $row['dob'],
              "edad" => $row['edad'],
              "parentesco" => $row['parentesco'],
          		"tlf1" => $row['tlf1'],
          		"tlf2" => $row['tlf2'],
          		"mail" => $row['mail'],
              "desde" => $row['desde'],
              "hasta" => $row['hasta'],
              "campana" => $row['campana'],
              "subgrupo" => $row['subgrupo'],
          		"empresa" => $row['empresa'],
              "consultas" => $row['consultas']
      		];

      	} while ($row = $result->fetch_assoc());

        mysqli_close($mysqli);
        return $array;

      } else {
        mysqli_close($mysqli);
        return 0;
      }

    }

    function restar($titular, $beneficiario) {
      define('DB_HOST', '127.0.0.1');
    	define('DB_NAME', 'obsequio');
    	define('DB_USER', 'root');
    	define('DB_PASSWORD', '');

      $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

      if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
      }

      $query = "SELECT consultas FROM asegurados WHERE titular='$beneficiario'";
      $result = $mysqli->query($query);
    	$row = $result->fetch_assoc();

      do {
        $query = "UPDATE asegurados SET consultas=consultas-1 WHERE titular='$titular'";
      } while ($row = $result->fetch_assoc());

      if ($mysqli->query($query) === TRUE) {
          return "Llamada descontada.";
      } else {
          echo "Error actualizando la base de datos: " . $mysqli->error;
      }

      $mysqli->close();

    }
?>
