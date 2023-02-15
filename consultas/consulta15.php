<?php 

include ("conexion.php");


$cn = Conectarse();
$rslistar = "SELECT a.nombres,a.apellidos,a.promedio, e.especialidad FROM alumnos a, especialidad e WHERE a.codespecialidad = e.codigoespecialidad AND e.especialidad = 'OBSTETRICIA' ORDER BY a.apellidos DESC, a.promedio ASC;";
$listar = mysqli_query($cn,$rslistar);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">

    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>

<body>

    <TABLE BORDER=0 CELLSPACING=5 CELLPADDING=5>
        <TR class="detalle2">
            <TH>NOMBRES</TH>
            <TH>APELLIDOS</TH>
            <TH>PROMEDIO</TH>
            <TH>ESPECIALIDAD</TH>
        </TR>

        <?php 


        while($rslistar=mysqli_fetch_array($listar)){

        ?>

        <TR>
            <TD class="datos1"><?php echo $rslistar["nombres"];?></TD>
            <TD class="datos1"><?php echo $rslistar["apellidos"];?></TD>
            <TD class="datos1"><?php echo $rslistar["promedio"];?></TD>
            <TD class="datos1"><?php echo $rslistar["especialidad"];?></TD>

        </TR>

        <?php }?>

        <!-- CONSULTA10 -->
        <!-- SELECT e.apepaterno, e.apematerno, e.nombres, c.descri AS cargo, p.profesion FROM empleado e, profesion p, cargo c WHERE e.codpro = p.codpro AND nombres LIKE "%I%" AND p.profesion NOT IN ("SECUNDARIA") AND c.descri OR "CAJERO" LIMIT 0,30 -->
    </TABLE>
</body>

</html>