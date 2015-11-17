<?php
    $db = mysqli_connect("127.0.0.1", "root", "13243546", "sistema") or die(mysqli_error($db));
?>
<!DOCTYPE html>
<HTML>
	<HEAD>
		<META charset=utf-8 />
	</HEAD>
	<BODY>
	    <H2>Alumnos</H2>
		<DIV id="resultado">
			<?php
				$variable = $_POST["busqueda"];
				$resultado = mysqli_query($db, "SELECT * FROM alumno WHERE Nombre LIKE '%$variable%' OR Codigo LIKE '$variable%' OR Ingreso LIKE '$variable'") or die(mysqli_error($db));
				echo "Se encontraron ".count($resultado)." alumnos";
				echo "<TABLE border=1>";
				echo "<TD>Código</TD><TD>Nombre</TD><TD>Estatus</TD><TD>Créditos</TD>";
				for ($x=0;$x<count($resultado);$x++){
					$row = mysqli_fetch_array($resultado, MYSQLI_BOTH);
					echo "<TR><FORM action='alumnosu.php' method=post>";
						echo "<TD><INPUT TYPE=text NAME='Codigo' VALUE='".$row["Codigo"]."' /></TD>";
						echo "<TD><INPUT TYPE=text NAME='Nombre' VALUE='".$row["Nombre"]."' /></TD>";
						echo "<TD>".$row["Estatus"]."</TD>";
						echo "<TD><INPUT TYPE=text NAME='Creditos' VALUE='".$row["Creditos"]."' /></TD>";
						echo "<TD><INPUT TYPE=submit VALUE='Guardar' /></TD>";
    					echo "</FORM>";
    					echo "<FORM action='alumnosd.php' method=post>";
    					echo "<INPUT TYPE=hidden NAME='Codigo' VALUE='".$row["Codigo"]."' />";
    					echo "<TD><INPUT TYPE=submit VALUE='Eliminar' /></TD>";
					echo "</FORM></TR>";
				}
				echo "</TABLE>";
			?>
		</DIV>
	</BODY>
</HTML>