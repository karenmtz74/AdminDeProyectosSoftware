<?php
 $idEstudiante=$_POST['idEstudiante'];
		 
 $clicks=$_POST['click'];
$clicktot=strlen($clicks);
$clickstot=$clicktot/12;
$clickstot=round($clickstot, 0, PHP_ROUND_HALF_DOWN);

$saldoDar=$clickstot*0.08;
	$enlace =  mysql_connect('localhost', 'root', 'root');
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
	$est=$fila["saldo"];
	$saldoact=$est+$saldoDar;
		$query = 'UPDATE estudiante SET saldo='.$saldoact.'  WHERE idEstudiante='.$idEstudiante.';';
		$result = mysql_query($query) ;
		header("Location: usuario.php?idEstudiante=$idEstudiante"); 
}

mysql_free_result($result);

mysql_close($enlace);


?>