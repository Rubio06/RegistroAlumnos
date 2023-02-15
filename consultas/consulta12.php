<?php 

include ("conexion.php");


$cn = Conectarse();
$rslistar = "SELECT a.nombres, e.especialidad, c.ciclo, cu.curso, ci.ciudad FROM alumnos a, especialidad e, ciclo c, curso cu, ciudad ci WHERE a.codespecialidad = e.codigoespecialidad AND a.codciclo = c.codigocliclo AND a.codcurso = cu.codigocurso AND a.codciudad = ci.codigociudad AND e.especialidad = 'CONTABILIDAD' AND ci.ciudad LIKE '%A';";
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
            <TH>NOMBRE</TH>
            <TH>ESPECIALIDAD</TH>
            <TH>CICLO</TH>
            <TH>CURSO</TH>
            <TH>CIUDAD</TH>
        </TR>

        <?php 


        while($rslistar=mysqli_fetch_array($listar)){

        ?>

        <TR>
            <TD class="datos1"><?php echo $rslistar["nombres"];?></TD>
            <TD class="datos1"><?php echo $rslistar["especialidad"];?></TD>
            <TD class="datos1"><?php echo $rslistar["ciclo"];?></TD>
            <TD class="datos1"><?php echo $rslistar["curso"];?></TD>
            <TD class="datos1"><?php echo $rslistar["ciudad"];?></TD>
        </TR>

        <?php }?>

        <!-- CONSULTA10 -->
        <!-- SELECT e.apepaterno, e.apematerno, e.nombres, c.descri AS cargo, p.profesion FROM empleado e, profesion p, cargo c WHERE e.codpro = p.codpro AND nombres LIKE "%I%" AND p.profesion NOT IN ("SECUNDARIA") AND c.descri OR "CAJERO" LIMIT 0,30 -->
    </TABLE>
</body>

</html>