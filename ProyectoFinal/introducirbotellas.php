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
        <p align="center"> Introducir Botellas </p>

         </td><td></td><td width="20%"></td></tr>
<tr>
<td></td>
<td><p >Botellas:</p></td>
<td><script type="text/javascript">
    var clicks = 0;
    function onClick() {
        
		clicks += 1;
        
		document.getElementById("clicks").innerHTML = clicks;
		document.getElementById('click').value=document.getElementById('botellas').value;
    
	};
	
    </script>
    <?php echo '<p><a id="clicks">0  ';
	
	echo '</a></p>';
	?></td></tr>
<tr><td></td><td></td><td></td>
<td>
<?php echo'<form onSubmit="onClick(); return false;" >
<input type="text" id="botellas" name="botellas" style="color:#00FF99;background-color:#00FF99"; border="0" autofocus>
</form>
<form action="actualizar.php" method="post" id="actualiza">
<input type="hidden" id="idEstudiante" name="idEstudiante" value="'.$idEstudiante.'"/>
<input type="hidden" id="click" name="click" value=""/>
<button type="submit" class="btn">Finalizar</button></form>'?>
</td>
</tr></table>


</div>
</body>
</html>