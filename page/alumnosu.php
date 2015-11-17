<?php
	$estatus = $_POST["Estatus"];
	$codigo = $_POST["Codigo"];
	$nombre = $_POST["Nombre"];
	$creditos = $_POST["Creditos"];
	$db = mysqli_connect("127.0.0.1", "root", "13243546", "sistema") or die(mysqli_error($db));
	$resultado = mysqli_query($db, "UPDATE alumno SET Estatus='$estatus', Codigo=$codigo, Nombre='$nombre', Creditos='$creditos' WHERE Codigo=$codigo") or die(mysqli_error($db));
?>
<script type="text/javascript">
	alert("Alumno actualizado con exito");
	document.location.href = "/graciela/page/alumnos.php";
</script>