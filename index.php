<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="./css/styles.css"/>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<script src="./js/bootstrap.min.js"></script>
	<title>Cupón de Obsequio</title>
</head>
<body>
	<div class="header">
		<img src="./img/logo.png" alt="" />
	</div>
	<div class="search">
		<h1>Buscador</h1>
		<form role="form" method="POST" action="index.php">
		  <input name="cedula" type="text" class="form-control form-text" placeholder="Número de cédula" id="search-input" required>
			<button type="submit" class="btn btn-success" id="search-button">Buscar</button>
		</form>
	</div>

	<div class="result">

		<?php
			if (isset($_POST['cedula'])) {
				include './buscar.php';
				$show = buscar($_POST['cedula']);

				if ($show == 0) {

					?><p>No se consiguieron resultados.</p><?php

				} else {
					?>
					<table>
						<tr id="table-head">
							<td>Nombre</td>
							<td>Apellido</td>
							<td>Cédula</td>
							<td>Género</td>
							<td>Fecha de Nacimiento</td>
							<td>Teléfono 1</td>
							<td>Teléfono 2</td>
							<td>Correo</td>
							<td>Empresa</td>
							<td>Subgrupo</td>
						</tr>
						<tr>
							<td><?php echo $show['nombre']; ?></td>
							<td><?php echo $show['apellido']; ?></td>
							<td><?php echo $show['cedula']; ?></td>
							<td><?php echo $show['genero']; ?></td>
							<td><?php echo $show['dob']; ?></td>
							<td><?php echo $show['tlf1']; ?></td>
							<td><?php echo $show['tlf2']; ?></td>
							<td><?php echo $show['mail']; ?></td>
							<td><?php echo $show['empresa']; ?></td>
							<td><?php echo $show['subgrupo']; ?></td>
						</tr>
					</table>
					<?php
				}
			}
		?>

	</div>

</body>
</html>
