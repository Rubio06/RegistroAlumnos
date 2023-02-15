<?php
    include("conexcion/conexion.php");
    $cn=Conectarse();

    $codigociudad = $_GET['codigociudad'];
    $ciudad = strtoupper($_GET['ciudad']);

    $rsinsertar="INSERT INTO ciudad (codigociudad, ciudad) VALUES ('$codigociudad','$ciudad')";
    $insertar = mysqli_query($cn,$rsinsertar);
?>
<script type="text/javascript">cargaurl('listar.php','listado')</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Regresar</a>
</body>
</html>

