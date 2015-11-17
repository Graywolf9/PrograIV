<!DOCTYPE html>
<HTML>
    <HEAD>
    	<META charset=utf-8 />
        <style type="text/css">
            BODY {
                background: blue;
            }
        
            #menu {
                list-style-type: none;
            }

            #menu > li {
                display: inline;
                margin-right: 20%;
                font-size: 3em;
            }
            
            #menu3 {
                position: absolute;
                list-style-type: none;
                top: .4em;
                left: 4em;
                background: purple;
                border-radius: 9px;
            }
            
            #menu3 > li {
                display: inline;
                border-left: 1px solid black;
                padding-left: .5em;
            }
            
            A {
                text-decoration: none;
                color: white;
            }
        </style>
        <script type="text/javascript">
            var oculto = 1;
            function mostrar(){
                if (oculto == 1){
                    document.getElementById("menu3").style.display = "block";
                    oculto = 0;
                }
                else{
                    document.getElementById("menu3").style.display = "none";
                    oculto = 1;
                }
            }
        </script>
    </HEAD>
    <BODY>
    	<UL id="menu">
    		<LI>
    			<A id="menu2" HREF="#" onClick="mostrar()">Menu</A>
    			<UL id="menu3" style="display: none">
    				<LI><A TARGET="contenido" HREF="alumnos.php">Alumnos</A></LI>
    				<LI><A TARGET="contenido" HREF="estatus.php">Estatus</A></LI>
    				<LI><A TARGET="contenido" HREF="semestre.php">Semestre</A></LI>
                    <LI><A TARGET="contenido" HREF="modalidad.php">Modalidad</A></LI>
    			</UL>
    		</LI>
    		<LI><A TARGET="contenido" HREF="contacto.php">Contacto</A></LI>
    		<LI><A TARGET="contenido" HREF="coordinacion.php">Coordinación</A></LI>
    	</UL>
    </BODY>
</HTML>