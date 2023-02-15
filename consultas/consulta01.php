<?php 
    include ("conexion.php");
    $cn = Conectarse();
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
    <div class="container">
        <TABLE BORDER=0 CELLSPACING=5 CELLPADDING=5>
            <TR class="tr-consultas" style= "position: sticky;top: 110px; z-index: 1; background: green;">
                <TH>NOMBRES</TH>
                <TH>APELLIDOS</TH>
                <TH>ESPECIALIDAD</TH>
                <TH>CICLO</TH>
            </TR>
            <?php 
                $rslistar = "SELECT a.nombres, a.apellidos, e.especialidad, c.ciclo FROM alumnos a, especialidad e, ciclo c WHERE a.codespecialidad = e.codigoespecialidad AND a.codciclo = c.codigocliclo AND c.ciclo = 'PRIMERO';";
                $listar = mysqli_query($cn,$rslistar);
                while($rslistar=mysqli_fetch_array($listar)){
            ?>
            <TR style= "position: sticky;top: 115px;" class="tr-registros">
                <TD class="datos1"><?php echo $rslistar["nombres"];?></TD>
                <TD class="datos1"><?php echo $rslistar["apellidos"];?></TD>
                <TD class="datos"><?php echo $rslistar["especialidad"];?></TD>
                <TD class="datos"><?php echo $rslistar["ciclo"];?></TD>
            </TR>
            <?php }?>
        </TABLE>
    </div>
</body>

</html>