<?php
	require 'conexion.php';
    $codigo = $_GET["Codigo"];
    $resultado = mysqli_query($db, "DELETE FROM alumno WHERE Codigo=$codigo") or die(mysqli_error($db));
?>
<script type="text/javascript">
	alert("Alumno eliminado con exito");
	document.location.href = "/graciela/page/alumnos.php";
</script>