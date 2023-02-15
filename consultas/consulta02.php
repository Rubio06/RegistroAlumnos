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
                <TH>ESPECIALIDAD</TH>
            </TR>
            <?php 
                $rslistar = "SELECT a.nombres, e.especialidad FROM alumnos a, especialidad e WHERE a.codespecialidad = e.codigoespecialidad AND e.especialidad = 'CONTABILIDAD';";
                $listar = mysqli_query($cn,$rslistar);
                while($rslistar=mysqli_fetch_array($listar)){
            ?>
            <TR style= "position: sticky;top: 115px;" class="tr-registros">
                <TD class="datos1"><?php echo $rslistar["nombres"];?></TD>
                <TD class="datos1"><?php echo $rslistar["especialidad"];?></TD>
            </TR>
            <?php }?>
        </TABLE>
    </div>
</body>
</html>