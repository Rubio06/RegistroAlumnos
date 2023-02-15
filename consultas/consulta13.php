<?php 

include ("conexion.php");


$cn = Conectarse();
$rslistar = "SELECT a.codigo, a.nombres, a.apellidos, a.codespecialidad, a.codcurso,a.codciudad,a.promedio, a.codciudad,c.codigocliclo,c.ciclo, ci.codigociudad, ci.ciudad, cu.codigocurso, cu.curso, e.codigoespecialidad, e.especialidad FROM alumnos a, ciclo c, ciudad ci, curso cu, especialidad e WHERE a.codciclo = c.codigocliclo AND a.codciudad = ci.codigociudad AND a.codcurso = cu.codigocurso AND a.codespecialidad = e.codigoespecialidad ORDER BY a.codigo;";
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
            <TH>CODIGO</TH>
            <TH>NOMBRES</TH>
            <TH>APELLIDOS</TH>
            <TH>CODESPECIALIDAD</TH>
            <TH>CODCURSO</TH>
            <TH>CODCIUDAD</TH>
            <TH>PROMEDIO</TH>
            <TH>CODCIUDAD</TH>
            <TH>CODIGOCICLO</TH>
            <TH>CICLO</TH>
            <TH>CODIGOCIUDAD</TH>
            <TH>CIUDAD</TH>
            <TH>CODIGOCURSO</TH>
            <TH>CURSO</TH>
            <TH>CODIGOESPECIALIDAD</TH>
            <TH>ESPECIALIDAD</TH>

                

        </TR>

        <?php 


        while($rslistar=mysqli_fetch_array($listar)){

        ?>

        <TR>
            <TD class="datos1"><?php echo $rslistar["codigo"];?></TD>
            <TD class="datos1"><?php echo $rslistar["nombres"];?></TD>
            <TD class="datos1"><?php echo $rslistar["apellidos"];?></TD>
            <TD class="datos1"><?php echo $rslistar["codespecialidad"];?></TD>
            <TD class="datos1"><?php echo $rslistar["codcurso"];?></TD>
            <TD class="datos1"><?php echo $rslistar["codciudad"];?></TD>
            <TD class="datos1"><?php echo $rslistar["promedio"];?></TD>
            <TD class="datos1"><?php echo $rslistar["codciudad"];?></TD>
            <TD class="datos1"><?php echo $rslistar["codigocliclo"];?></TD>
            <TD class="datos1"><?php echo $rslistar["ciclo"];?></TD>
            <TD class="datos1"><?php echo $rslistar["codigociudad"];?></TD>
            <TD class="datos1"><?php echo $rslistar["ciudad"];?></TD>
            <TD class="datos1"><?php echo $rslistar["codigocurso"];?></TD>
            <TD class="datos1"><?php echo $rslistar["curso"];?></TD>
            <TD class="datos1"><?php echo $rslistar["codigoespecialidad"];?></TD>
            <TD class="datos1"><?php echo $rslistar["especialidad"];?></TD>

        </TR>

        <?php }?>

        <!-- CONSULTA10 -->
        <!-- SELECT e.apepaterno, e.apematerno, e.nombres, c.descri AS cargo, p.profesion FROM empleado e, profesion p, cargo c WHERE e.codpro = p.codpro AND nombres LIKE "%I%" AND p.profesion NOT IN ("SECUNDARIA") AND c.descri OR "CAJERO" LIMIT 0,30 -->
    </TABLE>
</body>

</html>