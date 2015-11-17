<?php
    $db = mysqli_connect("127.0.0.1", "root", "13243546", "sistema") or die(mysqli_error($db));
?>
<!DOCTYPE html>
<HTML>
	<HEAD>
		<META charset=utf-8 />
	</HEAD>
	<BODY>
	    <H2>Modalidad</H2>
		<FORM action="modalidadr.php" method=post>
			Introduce tu busqueda: <INPUT NAME="busqueda" TYPE=text id="busqueda"><br/>
			<INPUT TYPE=submit>
		</FORM>
	</BODY>
</HTML>