<?php
    $codigo = $_GET["Codigo"];
    $db = mysqli_connect("127.0.0.1", "root", "13243546", "sistema") or die(mysqli_error($db));
    $resultado = mysqli_query($db, "DELETE FROM alumno WHERE Codigo=$codigo") or die(mysqli_error($db));
?>
<script type="text/javascript">
	alert("Alumno eliminado con exito");
	document.location.href = "/graciela/page/alumnos.php";
</script>