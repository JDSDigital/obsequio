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
			<button type="submit" class="btn btn-success" id="search-button"><span class="glyphicon glyphicon-search"></span> Buscar</button>
		</form>
	</div>

	<div class="result">

		<?php
			if (isset($_POST['cedula'])) {
				include './functions.php';
				$show = buscar($_POST['cedula']);

				if ($show == 0) {

					?><p>No se consiguieron resultados.</p><?php

				} else {
					$titular = $show['titular'];
					$beneficiario = $show['beneficiario'];
					?>

					<table>
						<tr id="table-head">
							<td>Cédula</td>
							<td>Tipo de beneficiario</td>
							<td>Nombre</td>
							<td>Apellido</td>
							<td>Edad</td>
							<td>Teléfono</td>
							<td>Vencimiento</td>
							<td>Campaña</td>
							<td>Subgrupo</td>
							<td>Disponibles</td>
						</tr>
						<tr>
							<td><?php echo $show['beneficiario']; ?></td>
							<td><?php echo $show['tipo']; ?></td>
							<td><?php echo $show['nombre']; ?></td>
							<td><?php echo $show['apellido']; ?></td>
							<td><?php echo $show['edad']; ?></td>
							<td><?php echo $show['tlf1']; ?></td>
							<td><?php echo $show['hasta']; ?></td>
							<td><?php echo $show['campana']; ?></td>
							<td><?php echo $show['subgrupo']; ?></td>
							<?php
								if ($show['consultas'] == 999) {
									?><td>ILIMITADAS</td><?php
								} else {
									?><td><?php echo $show['consultas']; ?></td><?php
								} ?>
						</tr>
					</table>

					<?php

						if ($show['consultas'] == 999) {
							?>
							<div class="action-buttons row">
								<!-- <button type="button" class="btn btn-success" id="show-button" onclick="window.open('./show.php','name','width=400,height=300')"><span class="glyphicon glyphicon-plus-sign"></span> Mostrar más</button>
								<button type="button" class="btn btn-danger" id="show-button" onclick=""><span class="glyphicon glyphicon-minus-sign"></span> Descontar llamada</button> -->
								<div class="col-xs-2 col-xs-offset-5">
									<form class="" action="./show.php" target="popup" method="post">
										<input type="hidden" name="showMore" value="<?php echo implode(',', $show); ?>" />
										<button type="submit" class="btn btn-success" id="show-button"><span class="glyphicon glyphicon-plus-sign"></span> Mostrar más</button>
									</form>
								</div>

							</div>

							<?php

						} else {

							?>
							<div class="action-buttons row">
								<!-- <button type="button" class="btn btn-success" id="show-button" onclick="window.open('./show.php','name','width=400,height=300')"><span class="glyphicon glyphicon-plus-sign"></span> Mostrar más</button>
								<button type="button" class="btn btn-danger" id="show-button" onclick=""><span class="glyphicon glyphicon-minus-sign"></span> Descontar llamada</button> -->
								<div class="col-xs-2 col-xs-offset-4">
									<form class="" action="./show.php" target="popup" method="post">
										<input type="hidden" name="showMore" value="<?php echo implode(',', $show); ?>" />
										<button type="submit" class="btn btn-success" id="show-button"><span class="glyphicon glyphicon-plus-sign"></span> Mostrar más</button>
									</form>
								</div>

								<div class="col-xs-2">
									<form class="" action="./index.php" method="post">
										<input type="hidden" name="titular" value="<?= $titular ?>" />
										<input type="hidden" name="beneficiario" value="<?= $beneficiario ?>" />
										<button type="submit" class="btn btn-danger" id="show-button"><span class="glyphicon glyphicon-minus-sign"></span> Descontar llamada</button>
									</form>
								</div>

							</div>
							<?php
						}

					 ?>

					<?php
				}
			}

			if (isset($_POST['titular']) && isset($_POST['beneficiario'])) {
				include './functions.php';
				$delete = restar($_POST['titular'], $_POST['beneficiario']);

				?> <p> <?php echo $delete; ?> </p> <?php
			}

		?>

	</div>

</body>
</html>
