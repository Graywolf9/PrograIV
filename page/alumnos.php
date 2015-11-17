<!DOCTYPE html>
<HTML>
	<HEAD>
		<META charset=utf-8 />
	</HEAD>
	<BODY>
	    <H2>Alumnos</H2>
		<FORM action="alumnosr.php" method=post>
			Introduce tu busqueda: <INPUT NAME="busqueda" TYPE=text id="busqueda"><br/>
			<INPUT TYPE=submit>
		</FORM>
		<H2>Agregar alumno</H2>
		<FORM action="alumnosn.php" method=post>
			Código: <INPUT TYPE=number NAME="Codigo" /><br/>
			Nombre: <INPUT TYPE=text NAME="Nombre" /><br/>
			Ingreso: <INPUT TYPE=date NAME="Ingreso" /><br/>
			<INPUT TYPE=submit VALUE="Agregar"/>
		</FORM>
	</BODY>
</HTML>