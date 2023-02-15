<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="titulo-index">PROYECTO REGISTRO DE ALUMNOS</h1>
        <div>
            <TABLE cellpadding="8" cellspacing="2" class="tabla">
                <TR align="center" class="tr-titulo">
                    <TD colspan="5">INGRESO DE DATOS</TD>
                </TR>
                <TR class="tr-botones">
                    <TD class="boton"><button onclick="cargaurl('alumnos.php', 'detalle');">ALUMNOS</button></TD>
                    <TD class="boton"><button onclick="cargaurl('especialidad.php', 'detalle');">ESPECIALIDAD</button></TD>
                    <TD class="boton"><button onclick="cargaurl('ciclo.php', 'detalle');">CICLO</button></TD>
                    <TD class="boton"><button onclick="cargaurl('curso.php', 'detalle');">CURSO</button></TD>
                    <TD class="boton"><button onclick="cargaurl('ciudad.php', 'detalle');">CIUDAD</button></TD>
                </TR>
            </TABLE>
        </div>
        <div id="detalle" class="detalle"></div>
        <div style="overflow:scroll;width: 98%;margin: auto;max-height: 500px; background: rgb(175, 208, 224);">
            <TABLE cellspacing="10" cellpadding="5" style="position: sticky;top: 0; margin-bottom: 30px; margin:auto;">
                <TR>
                    <TD align="center" colspan="11" class="tr-titulo2">LISTA DE CONSULTAS SQL</TD>
                </TR>
                <TR class="tr-urls">
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta01.php', 'consultas');">CONSULTA01</a></TD>
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta02.php', 'consultas');">CONSULTA02</a></TD>
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta03.php', 'consultas');">CONSULTA03</a></TD>
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta04.php', 'consultas');">CONSULTA04</a></TD>
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta05.php', 'consultas');">CONSULTA05</a></TD>
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta06.php', 'consultas');">CONSULTA06</a></TD>
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta07.php', 'consultas');">CONSULTA07</a></TD>
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta08.php', 'consultas');">CONSULTA08</a></TD>
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta09.php', 'consultas');">CONSULTA09</a></TD>
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta10.php','consultas');">CONSULTA10</a></TD>
                    <TD><a href="#" class="enlace" onclick="cargaurl('consultas/consulta11.php', 'consultas');">CONSULTA011</a></TD>
                </TR>
            </TABLE>
            <div id="consultas"></div>
        </div>
    </div>

</body>

</html>