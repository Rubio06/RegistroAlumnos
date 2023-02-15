<?php
    include("conexcion/conexion.php");
    $cn=Conectarse();
    
    $codigo = $_GET['codigo'];
    $nombres = strtoupper($_GET['nombres']);
    $apellidos = strtoupper($_GET['apellidos']);
    $codigoespecialidad = $_GET['codigoespecialidad'];
    $codigocliclo = $_GET['codigocliclo'];
    $codigocurso = $_GET['codigocurso'];
    $promedio = $_GET['promedio'];
    $codigociudad = $_GET['codigociudad'];

    $rsinsertar="INSERT INTO alumnos(`codigo`, `nombres`, `apellidos`, `codespecialidad`, `codciclo`, `codcurso`, `promedio`, `codciudad`) VALUES ('$codigo','$nombres','$apellidos','$codigoespecialidad','$codigocliclo','$codigocurso','$promedio','$codigociudad')";
    $insertar = mysqli_query($cn,$rsinsertar);
?>
<script type="text/javascript">cargaurl('listar.php','listado')</script>



