<?php
	$codigo = $_POST["Codigo"];
	$nombre = $_POST["Nombre"];
	$ingreso = $_POST["Ingreso"];
	$db = mysqli_connect("127.0.0.1", "root", "13243546", "sistema") or die(mysqli_error($db));
	$resultado = mysqli_query($db, "INSERT INTO alumno (Codigo, Nombre, Ingreso) VALUES ($codigo, '$nombre', '$ingreso')") or die(mysqli_error($db));
?>
<script type="text/javascript">
	alert("Alumno actualizado con exito");
	document.location.href = "/graciela/page/alumnos.php";
</script>