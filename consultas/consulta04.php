<?php 
    include ("conexion.php");
    $cn = Conectarse();
    $rslistar = "SELECT a.nombres, a.promedio, ci.ciudad, e.especialidad, cl.ciclo FROM alumnos a, ciudad ci, especialidad e, ciclo cl WHERE a.codciudad = ci.codigociudad AND a.codespecialidad = e.codigoespecialidad AND a.codciclo = cl.codigocliclo AND ci.ciudad = 'TRUJILLO' AND e.especialidad = 'CONTABILIDAD' AND cl.ciclo = 'SEXTO' AND promedio <=10;
    ";
    $listar = mysqli_query($cn,$rslistar);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">

    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <TABLE BORDER=0 CELLSPACING=5 CELLPADDING=5>
        <TR class="tr-consultas" style= "position: sticky;top: 110px; z-index: 1; background: green;">
            <TH>NOMBRE PRODUCTO</TH>
            <TH>PROMEDIO</TH>
            <TH>CIUDAD</TH>
            <TH>ESPECIALIDAD</TH>
            <TH>CICLO</TH>
        </TR>
        <?php 
            while($rslistar=mysqli_fetch_array($listar)){
        ?>
        <TR style= "position: sticky;top: 115px;" class="tr-registros">
            <TD class="datos1"><?php echo $rslistar["nombres"];?></TD>
            <TD class="datos1"><?php echo $rslistar["promedio"];?></TD>
            <TD class="datos1"><?php echo $rslistar["ciudad"];?></TD>
            <TD class="datos1"><?php echo $rslistar["especialidad"];?></TD>
            <TD class="datos1"><?php echo $rslistar["ciclo"];?></TD>
        </TR>
        <?php }?>
    </TABLE>
</body>

</html>