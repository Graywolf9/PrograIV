<?php
	require 'conexion.php';
	$estatus = $_POST["Estatus"];
	$codigo = $_POST["Codigo"];
	$resultado = mysqli_query($db, "UPDATE alumno SET Estatus='$estatus' WHERE Codigo=$codigo") or die(mysqli_error($db));
?>
<script type="text/javascript">
	alert("Alumno actualizado con exito");
	document.location.href = "/graciela/page/estatus.php";
</script>