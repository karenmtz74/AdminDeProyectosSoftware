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
        <iframe width="620" height="515" src="//www.youtube.com/embed/D-rUD7F-RBw" frameborder="0" allowfullscreen></iframe>

         </td><td></td><td width="20%"></td></tr>
<tr>
<td></td>
<td></td>
<td></td>
<td><button class="btn" onClick="location.href='<?php echo 'introducirbotellas.php?idEstudiante='.$idEstudiante.'' ?>'">Introducir Botellas</button></td>
</tr></table>

</div>
</body>
</html>