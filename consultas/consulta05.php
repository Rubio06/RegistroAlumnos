<?php 
    include ("conexion.php");
    $cn = Conectarse();
    $rslistar = "SELECT a.nombres, e.especialidad , a.promedio, ci.ciudad FROM alumnos a, especialidad e, ciudad ci WHERE a.codespecialidad = e.codigoespecialidad AND a.codciudad = ci.codigociudad AND e.especialidad = 'MEDICINA' AND ci.ciudad = 'AREQUIPA' AND a.promedio <= 10;";
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
    <TABLE BORDER=0 CELLSPACING=5 CELLPADDING=5 style="position: sticky;top: 0;">
        <TR class="tr-consultas" style= "position: sticky;top: 110px; z-index: 1; background: green;">
            <TH>NOMBRES</TH>
            <TH>ESPECIALIDAD</TH>
            <TH>PROMEDIO</TH>
            <TH>CIUDAD</TH>
        </TR>
        <?php 
            while($rslistar=mysqli_fetch_array($listar)){
        ?>
        <TR style= "position: sticky;top: 115px;" class="tr-registros">
            <TD class="datos1"><?php echo $rslistar["nombres"];?></TD>
            <TD class="datos1"><?php echo $rslistar["especialidad"];?></TD>
            <TD class="datos1"><?php echo $rslistar["promedio"];?></TD>
            <TD class="datos1"><?php echo $rslistar["ciudad"];?></TD>
        </TR>
        <?php }?>
    </TABLE>
</body>

</html>