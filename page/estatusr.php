<?php
    $db = mysqli_connect("127.0.0.1", "root", "13243546", "sistema") or die(mysqli_error($db));
?>
<!DOCTYPE html>
<HTML>
	<HEAD>
		<META charset=utf-8 />
	</HEAD>
	<BODY>
	    <H2>Estatus</H2>
		<DIV id="resultado">
			<?php
				$variable = $_POST["busqueda"];
				$resultado = mysqli_query($db, "SELECT * FROM alumno WHERE Nombre LIKE '%$variable%' OR Codigo LIKE '$variable%' OR Ingreso LIKE '$variable'") or die(mysqli_error($db));
				echo "Se encontraron ".count($resultado)." alumnos";
				echo "<TABLE border=1>";
				echo "<TD>Código</TD><TD>Nombre</TD><TD>Estatus</TD><TD>Créditos</TD>";
				for ($x=0;$x<count($resultado);$x++){
					$row = mysqli_fetch_array($resultado, MYSQLI_BOTH);
					echo "<TR><FORM action='estatusu.php' method=post>";
						echo "<TD>".$row["Codigo"]."</TD>";
						echo "<INPUT TYPE=hidden NAME='Codigo' VALUE='".$row["Codigo"]."' />";
						echo "<TD>".$row["Nombre"]."</TD>";
						echo "<TD>".$row["Estatus"]."</TD>";
						echo "<TD>".$row["Creditos"]."</TD>";
						echo "<TD><SELECT NAME='Estatus'>";
						echo "<OPTION VALUE=''>Selecciona un estatus</OPTION>";
							$res = mysqli_query($db, "SELECT * FROM status");
							while($row1 = mysqli_fetch_array($res, MYSQLI_BOTH)){
								echo "<OPTION VALUE='".$row1["Estatus"]."'>".$row1["Estatus"]."</OPTION>";
							}
						echo "</SELECT></TD>";
						echo "<TD><INPUT TYPE=submit /></TD>";
					echo "</FORM><TR>";
				}
				echo "</TABLE>";
			?>
		</DIV>
	</BODY>
</HTML>