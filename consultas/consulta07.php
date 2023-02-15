<?php 
    include ("conexion.php");
    $cn = Conectarse();
    $rslistar = "SELECT a.codigo, a.nombres,a.apellidos, c.ciudad FROM alumnos a, ciudad c WHERE a.codciudad = c.codigociudad AND c.ciudad IN('CAJAMARCA','TRUJILLO','AREQUIPA') ORDER BY c.ciudad ASC;";
    $listar = mysqli_query($cn,$rslistar);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <TABLE BORDER=0 CELLSPACING=5 CELLPADDING=5>
        <TR class="tr-consultas" style="position: sticky;top: 110px; z-index: 1; background: green;">
            <TH>CODIGO</TH>
            <TH>NOMBRE</TH>
            <TH>APELLIDOS</TH>
            <TH>CIUDAD</TH>
        </TR>
        <?php 
                while($rslistar=mysqli_fetch_array($listar)){
            ?>
        <TR style="position: sticky;top: 115px;" class="tr-registros">
            <TD class="datos1"><?php echo $rslistar["codigo"];?></TD>
            <TD class="datos1"><?php echo $rslistar["nombres"];?></TD>
            <TD class="datos1"><?php echo $rslistar["apellidos"];?></TD>
            <TD class="datos"><?php echo $rslistar["ciudad"];?></TD>
        </TR>
        <?php }?>
    </TABLE>
</body>

</html>