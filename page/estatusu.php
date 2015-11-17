<?php
	$estatus = $_POST["Estatus"];
	$codigo = $_POST["Codigo"];
	$db = mysqli_connect("127.0.0.1", "root", "13243546", "sistema") or die(mysqli_error($db));
	$resultado = mysqli_query($db, "UPDATE alumno SET Estatus='$estatus' WHERE Codigo=$codigo") or die(mysqli_error($db));
?>
<script type="text/javascript">
	alert("Alumno actualizado con exito");
	document.location.href = "/graciela/page/estatus.php";
</script>