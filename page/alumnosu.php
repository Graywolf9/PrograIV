<?php
	require 'conexion.php';
	$estatus = $_POST["Estatus"];
	$codigo = $_POST["Codigo"];
	$nombre = $_POST["Nombre"];
	$creditos = $_POST["Creditos"];
	$semestre = $_POST["Semestre"];
	$modalidad = $_POST["Modalidad"];
	$Correo = $_POST["Correo"];
	$Telefono = $_POST["Telefono"];
	$Ingreso = $_POST["Ingreso"];
	$Egreso = $_POST["Egreso"];
	$Carrera = $_POST["Carrera"];

	$resultado = mysqli_query($db, "UPDATE alumno SET Estatus='$estatus', Codigo=$codigo, Nombre='$nombre', Creditos='$creditos', Semestre='$semestre',Modalidad='$modalidad',Correo='$Correo',Telefono='$Telefono',Ingreso='$Ingreso',Egreso='$Egreso',Carrera='$Carrera' WHERE Codigo=$codigo") or die(mysqli_error($db));
?>
<script type="text/javascript">
	alert("Alumno actualizado con exito");
	document.location.href = "/graciela/page/alumnos.php";
</script>