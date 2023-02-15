<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div id="listado">
        <div class="cont">
            <h1 class="alu-titulo">INGRESE DATOS DE CICLO</h1>
            <div class="datos-form">
                <LABEl for="">CODIGO</LABEl>
                <INPUT TYPE="text" name="codigocliclo" id="codigocliclo" disabled></INPUT>
            </div>
            <div class="datos-form">
                <LABEl for="">CICLO</LABEl>
                <INPUT TYPE="text" name="ciclo" id="ciclo"></INPUT>
            </div>
            <div class="btn-enviar">
                <button CLASS="botones" TYPE="button" NAME="accion" VALUE="Insertar" onclick="nuevociclo('listado');">Insertar</button>
                <TD><button CLASS="botones" type="reset">Reset</button></TD>
            </div>
        </div>
    </div>
</body>

</html>