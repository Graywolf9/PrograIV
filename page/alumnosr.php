<?php
	require 'conexion.php';
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
				echo "<TD>Código</TD><TD>Nombre</TD><TD>Estatus</TD><TD>Créditos</TD><TD>Semestre</TD><TD>Modalidad</TD><TD>Correo</TD><TD>Telefono</TD><TD>Ingreso</TD><TD>Egreso</TD><TD>Carrera</TD>";
				for ($x=0;$x<count($resultado);$x++){
					$row = mysqli_fetch_array($resultado, MYSQLI_BOTH);
					echo "<TR><FORM action='alumnosu.php' method=post>";
						echo "<TD><INPUT TYPE=text NAME='Codigo' VALUE='".$row["Codigo"]."' /></TD>";
						echo "<TD><INPUT TYPE=text NAME='Nombre' VALUE='".$row["Nombre"]."' /></TD>";
						echo "<TD>".$row["Estatus"]."</TD>";
						echo "<TD><INPUT TYPE=text NAME='Creditos' VALUE='".$row["Creditos"]."' /></TD>";
						echo"<td><INPUT TYPE=text NAME='Semestre' VALUE='".$row["Semestre"]."' /></TD>";
						echo"<td><INPUT TYPE=text NAME='Modalidad' VALUE='".$row["Modalidad"]."' /></TD>";
						echo"<td><INPUT TYPE=text NAME='Correo' VALUE='".$row["Correo"]."' /></TD>";
						echo"<td><INPUT TYPE=text NAME='Telefono' VALUE='".$row["Telefono"]."' /></TD>";
						echo"<td><INPUT TYPE=text NAME='Ingreso' VALUE='".$row["Ingreso"]."' /></TD>";
						echo"<td><INPUT TYPE=text NAME='Egreso' VALUE='".$row["Egreso"]."' /></TD>";
						echo"<td><INPUT TYPE=text NAME='Carrera' VALUE='".$row["Carrera"]."' /></TD>";
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