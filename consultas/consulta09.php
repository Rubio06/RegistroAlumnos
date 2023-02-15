<?php 
    include ("conexion.php");
    $cn = Conectarse();
    $rslistar = "SELECT a.nombres,a.apellidos, c.ciudad, e.especialidad, a.promedio, cu.curso FROM alumnos a, ciudad c, especialidad e, curso cu WHERE c.ciudad = 'TRUJILLO'AND e.especialidad = 'MEDICINA' AND a.promedio <= 10 AND cu.curso = 'FILOSOFIA' AND a.apellidos LIKE 'A%';
    ";
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
            <TH>NOMBRES</TH>
            <TH>APELLIDOS</TH>
            <TH>CIUDAD</TH>
            <TH>ESPECIALIDAD</TH>
            <TH>PROMEDIO</TH>
            <TH>CURSO</TH>
        </TR>
        <?php 
            while($rslistar=mysqli_fetch_array($listar)){
        ?>
        <TR style="position: sticky;top: 115px;" class="tr-registros">
            <TD class="datos1"><?php echo $rslistar["nombres"];?></TD>
            <TD class="datos1"><?php echo $rslistar["apellidos"];?></TD>
            <TD class="datos"><?php echo $rslistar["ciudad"];?></TD>
            <TD class="datos"><?php echo $rslistar["especialidad"];?></TD>
            <TD class="datos"><?php echo $rslistar["promedio"];?></TD>
            <TD class="datos"><?php echo $rslistar["curso"];?></TD>
        </TR>
        <?php }?>
    </TABLE>
</body>

</html>