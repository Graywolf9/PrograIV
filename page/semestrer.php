<?php
	require 'conexion.php';
?>
<!DOCTYPE html>
<HTML>
	<HEAD>
		<META charset=utf-8 />
	</HEAD>
	<BODY>
	    <H2>Semestre</H2>
		<DIV id="resultado">
			<?php
				$variable = $_POST["busqueda"];
				$resultado = mysqli_query($db, "SELECT * FROM alumno WHERE Nombre LIKE '%$variable%' OR Codigo LIKE '$variable%' OR Ingreso LIKE '$variable'") or die(mysqli_error($db));
				echo "Se encontraron ".count($resultado)." alumnos";
				echo "<TABLE border=1>";
				echo "<TD>Código</TD><TD>Nombre</TD><TD>Estatus</TD><TD>Créditos</TD><TD>Semestre</TD>";
				for ($x=0;$x<count($resultado);$x++){
					$row = mysqli_fetch_array($resultado, MYSQLI_BOTH);
					echo "<TR><FORM action='semestreu.php' method=post>";
						echo "<TD>".$row["Codigo"]."</TD>";
						echo "<INPUT TYPE=hidden NAME='Codigo' VALUE='".$row["Codigo"]."' />";
						echo "<TD>".$row["Nombre"]."</TD>";
						echo "<TD>".$row["Estatus"]."</TD>";
						echo "<TD>".$row["Creditos"]."</TD>";
							echo"<td>".$row["Semestre"]."</TD>";
						echo "<INPUT TYPE=hidden NAME='Semestre' VALUE='".$row["Semestre"]."' />";
						echo "<TD><INPUT TYPE=submit VALUE='+' /></TD>";
					echo "</FORM><TR>";
				}
				echo "</TABLE>";
			?>
		</DIV>
	</BODY>
</HTML>