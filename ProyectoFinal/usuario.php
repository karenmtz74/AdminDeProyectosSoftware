<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bottle Pet Print</title>
<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
</head>

<body>
<div class="content">
<table>
<tr><td>
<img src="img/10834064_10152353163662563_1494124012_n.jpg" height="150"/> <br><br><br><br><br><br><br><br><br><br><br><br><br><br></td><td width="15%"></td><td><br><br><br><br><br>
<?php $idEstudiante=$_GET['idEstudiante'];
		 ?>
        
<?php $enlace =  mysql_connect('localhost', 'root', 'root');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}

mysql_select_db('bpp') or die('No se pudo seleccionar la base de datos');



$query = 'SELECT * FROM estudiante where idEstudiante='.$idEstudiante.'';
$result = mysql_query($query) ;
if (mysql_num_rows($result) == 0) {
    echo "No se han encontrado filas, nada a imprimir, asi que voy a detenerme.";
    exit;
}

while ($fila = mysql_fetch_assoc($result)) {
	$est=$fila["idEstudiante"];
	echo '<p align="center">Mi Perfil </p>';
	
	echo '<p align="center">'.$fila['nombre'].' </p>';
	
	echo '<p align="center">'.$fila['idEstudiante'].' </p>';
	
	echo '<p align="center">'.$fila['carrera'].' </p>';
	
	echo '<p align="center">Saldo: $'.$fila['saldo'].' </p>';
}

mysql_free_result($resultado);

mysql_close($enlace);?>
</td><td></td><td width="20%"></td></tr>
<tr>
<td></td>
<td><button class="btn" onClick="location.href='index.php'">Cerrar Sesión</button></td>
<td></td>
<td><button class="btn" onClick="location.href='<?php echo 'botellas.php?idEstudiante='.$idEstudiante.'' ?>'">Introducir Botellas</button>
</td>
</tr></table>

</div>
</body>
</html>