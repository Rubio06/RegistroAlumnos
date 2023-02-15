<?php 
    include ("conexcion/conexion.php");
    $cn = Conectarse();
    $rslistar = "SELECT a.codigo, a.nombres, a.apellidos, e.especialidad, cl.ciclo, c.curso, a.promedio, ci.ciudad FROM alumnos a, especialidad e, ciclo cl, curso c, ciudad ci WHERE a.codigo = a.codigo AND a.codespecialidad = e.codigoespecialidad AND a.codciclo = cl.codigocliclo AND a.codcurso = c.codigocurso AND a.codciudad = ci.codigociudad ORDER by codigo desc LIMIT 0,30;";
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
    <div style="overflow: scroll; height: 300px; width: 180%;">
        <TABLE BORDER=0 CELLSPACING=5 CELLPADDING=5>
            <TR style="position: sticky;top: 0px; padding: 5px; background: green;">
                <TH>CODIGO</TH>
                <TH>NOMBRES</TH>
                <TH>APELLIDOS</TH>
                <TH>ESPECIALIDAD</TH>
                <TH>CICLO</TH>
                <TH>CURSO</TH>
                <TH>PROMEDIO</TH>
                <TH>CIUDAD</TH>
            </TR>
            <?php 
                while($rslistar=mysqli_fetch_array($listar)){
            ?>
            <TR style="text-align: center;">
                <TD class="datos1"><?php echo $rslistar["codigo"];?></TD>
                <TD class="datos"><?php echo $rslistar["nombres"];?></TD>
                <TD class="datos1"><?php echo $rslistar["apellidos"];?></TD>
                <TD class="datos1"><?php echo $rslistar["especialidad"];?></TD>
                <TD class="datos1"><?php echo $rslistar["ciclo"];?></TD>
                <TD class="datos1"><?php echo $rslistar["curso"];?></TD>
                <TD class="datos1"><?php echo $rslistar["promedio"];?></TD>
                <TD class="datos1"><?php echo $rslistar["ciudad"];?></TD>
            </TR>
            <?php }?>
        </TABLE>
    </div>
</body>

</html>