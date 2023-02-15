<?php 
    include("conexcion/conexion.php");
    $cn = Conectarse();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</head>

<body>
    <div id="listado">
        <div class="cont">
            <h1 class="alu-titulo">INGRESE NUEVOS ALUMNOS</h1>
            <div class="datos-form">
                <label for="">CODIGO</label>
                <input TYPE="text" name="codigo" id="codigo" disabled value="" required></input>
            </div>
            <div class="datos-form">
                <label for="">NOMBRE</label>
                <input TYPE="text" name="nombres" id="nombres" required></input>
            </div>
            <div class="datos-form">
                <label for="">APELLIDOS</label>
                <input TYPE="text" name="apellidos" id="apellidos" required></input>
            </div>
            <div class="datos-form">
                <label for="">ESPECIALIDAD</label>
                <select name="codigoespecialidad" id="codigoespecialidad" required>
                    <option>SELECCIONA UNA OPCION</option>
                    <?php 
                            $rsinsertar="select codigoespecialidad, especialidad from especialidad";
                            $insertar = mysqli_query($cn,$rsinsertar);
                            while ($lista = mysqli_fetch_array($insertar)) {
                        ?>
                    <option value="<?php echo $lista['codigoespecialidad']; ?>"><?php echo $lista['especialidad'];?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="datos-form">
                <label for="">CICLO</label>
                <select name="codigocliclo" id="codigocliclo" required>
                    <option>SELECCIONA UNA OPCION</option>
                    <?php 
                        $sql="select codigocliclo, ciclo from ciclo";
                        $query = mysqli_query($cn,$sql);
                        while ($registro = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?php echo $registro['codigocliclo'];?>"><?php echo $registro['ciclo'];?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="datos-form">
                <label for="">CURSO</label>
                <select name="codigocurso" id="codigocurso" required>
                    <option>SELECCIONA UNA OPCION</option>
                    <?php 
                        $sql="select codigocurso, curso from curso";
                        $query = mysqli_query($cn,$sql);
                        while ($registro = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?php echo $registro['codigocurso'];?>"><?php echo $registro['curso'];?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="datos-form">
                <label for="">PROMEDIO</label>
                <td><input TYPE="text" name="promedio" id="promedio" required></input></td>
            </div>
            <div class="datos-form">
                <label for="">CIUDAD</label>
                <select name="codigociudad" id="codigociudad" required>
                    <option>SELECCIONA UNA OPCION</option>
                    <?php 
                        $sql="select codigociudad, ciudad from ciudad";
                        $query = mysqli_query($cn,$sql);
                        while ($registro = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?php echo $registro['codigociudad'];?>"><?php echo $registro['ciudad'];?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="btn-enviar">
                <button CLASS="botones" TYPE="button" NAME="accion" VALUE="Insertar"onclick="alumno('listado');">INSERTAR</button>
                <button CLASS="botones" type="reset">RESET</button>
            </div>
        </div>

    </div>
</body>

</html>