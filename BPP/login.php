<?php
	$enlace =  mysql_connect('localhost', 'root', 'root');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}

mysql_select_db('bpp') or die('No se pudo seleccionar la base de datos');


if(isset($_POST['idEstudiantes']))
{ $idEstudiante = $_POST['idEstudiantes']; }

$query = 'SELECT * FROM estudiante';
$result = mysql_query($query) ;
if (mysql_num_rows($result) == 0) {
    echo "No se han encontrado filas, nada a imprimir, asi que voy a detenerme.";
    exit;
}

while ($fila = mysql_fetch_assoc($result)) {
	$est=$fila["idEstudiante"];
	
	if($est==$idEstudiante){
		header("Location: usuario.php?idEstudiante=$idEstudiante"); 
		}
}

mysql_free_result($resultado);

mysql_close($enlace);


?>