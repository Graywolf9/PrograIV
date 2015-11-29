<?php
	require 'conexion.php';
	$codigo = $_POST["Codigo"];
	$nombre = $_POST["Nombre"];
	$ingreso = $_POST["Ingreso"];
	$resultado = mysqli_query($db, "INSERT INTO alumno (Codigo, Nombre, Ingreso) VALUES ($codigo, '$nombre', '$ingreso')") or die(mysqli_error($db));
?>
<script type="text/javascript">
	alert("Alumno actualizado con exito");
	document.location.href = "/graciela/page/alumnos.php";
</script>