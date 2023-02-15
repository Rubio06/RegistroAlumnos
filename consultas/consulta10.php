<?php 
    include ("conexion.php");
    $cn = Conectarse();
    $rslistar = "SELECT a.nombres, a.apellidos, a.promedio, c.ciclo, cu.curso FROM alumnos a, ciclo c, curso cu WHERE a.codciclo = c.codigocliclo AND a.codcurso = cu.codigocurso AND a.promedio >=10 AND a.nombres LIKE 'J%' AND a.apellidos LIKE '%A';";
    $listar = mysqli_query($cn,$rslistar);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <TABLE BORDER=0 CELLSPACING=5 CELLPADDING=5>
        <TR class="tr-consultas" style="position: sticky;top: 110px; z-index: 1; background: green;">
            <TH>NOMBRE</TH>
            <TH>APELLIDOS</TH>
            <TH>PROMEDIO</TH>
            <TH>CICLO</TH>
            <TH>CURSO</TH>
        </TR>
        <?php 
            while($rslistar=mysqli_fetch_array($listar)){
        ?>
        <TR style="position: sticky;top: 115px;" class="tr-registros">
            <TD class="datos1"><?php echo $rslistar["nombres"];?></TD>
            <TD class="datos1"><?php echo $rslistar["apellidos"];?></TD>
            <TD class="datos"><?php echo $rslistar["promedio"];?></TD>
            <TD class="datos"><?php echo $rslistar["ciclo"];?></TD>
            <TD class="datos"><?php echo $rslistar["curso"];?></TD>
        </TR>
        <?php }?>

        <!-- CONSULTA10 -->
        <!-- SELECT e.apepaterno, e.apematerno, e.nombres, c.descri AS cargo, p.profesion FROM empleado e, profesion p, cargo c WHERE e.codpro = p.codpro AND nombres LIKE "%I%" AND p.profesion NOT IN ("SECUNDARIA") AND c.descri OR "CAJERO" LIMIT 0,30 -->
    </TABLE>
</body>

</html>