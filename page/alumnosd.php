<?php
    $codigo = $_POST["Codigo"];
?>
<script type="text/javascript">
    var resp = confirm('Seguro que deseas eliminar este registro');
    if (resp){
        document.location.href = "/graciela/page/alumnose.php?Codigo=<?php echo $codigo ?>";
    }
    else {
        document.location.href = "/graciela/page/alumnos.php";
    }
</script>