<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</head>

<body>
    <div id="listado">
        <div class="cont">
            <h1 class="alu-titulo">INGRESO DE CIUDAD</h1>
            <div class="datos-form">
                <LABEL>CODIGO</LABEL>
                <INPUT TYPE="text" name="codigociudad" id="codigociudad" disabled></INPUT>
            </div>
            <div class="datos-form">
                <LABEL>CIUDAD</LABEL>
                <INPUT TYPE="text" name="ciudad" id="ciudad"></INPUT>
            </div>
            <div class="btn-enviar">
                <button CLASS="botones" TYPE="button" NAME="accion" VALUE="Insertar"
                    onclick="nuevaciudad('listado');">ENVIAR</button>
                <button CLASS="botones" type="reset">RESET</button>
            </div>
        </div>
    </div>
</body>

</html>