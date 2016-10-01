<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="./css/styles.css"/>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<script src="./js/bootstrap.min.js"></script>
	<title>Cupón de Obsequio</title>
</head>
<body>
  <?php
	$showMore = explode(',', $_POST['showMore']);
	?>
	<table id="showAll">
		<tr><td>Titular: </td><td><?php echo $showMore[0]; ?></td></tr>
		<tr><td>Beneficiario: </td><td><?php echo $showMore[1]; ?></td></tr>
		<tr><td>Tipo: </td><td><?php echo $showMore[2]; ?></td></tr>
		<tr><td>Nombre: </td><td><?php echo $showMore[3]; ?></td></tr>
		<tr><td>Apellido: </td><td><?php echo $showMore[4]; ?></td></tr>
		<tr><td>Genero: </td><td><?php echo $showMore[5]; ?></td></tr>
		<tr><td>Fecha de Nacimiento: </td><td><?php echo $showMore[6]; ?></td></tr>
		<tr><td>Edad</td><td><?php echo $showMore[7]; ?></td></tr>
		<tr><td>Parentesco: </td><td><?php echo $showMore[8]; ?></td></tr>
		<tr><td>Telefono 1: </td><td><?php echo $showMore[9]; ?></td></tr>
		<tr><td>Telefono 2: </td><td><?php echo $showMore[10]; ?></td></tr>
		<tr><td>Correo: </td><td><?php echo $showMore[11]; ?></td></tr>
		<tr><td>Desde: </td><td><?php echo $showMore[12]; ?></td></tr>
		<tr><td>Hasta: </td><td><?php echo $showMore[13]; ?></td></tr>
		<tr><td>Campaña: </td><td><?php echo $showMore[14]; ?></td></tr>
		<tr><td>Subgrupo: </td><td><?php echo $showMore[15]; ?></td></tr>
		<tr><td>Empresa: </td><td><?php echo $showMore[16]; ?></td></tr>
		<tr><td>Consultas: </td><td><?php echo $showMore[17]; ?></td></tr>
	</table>
</body>
</html>
