function cargaurl(url, contenedor) {
    var url = url;
    var contenedor = contenedor;
    document.getElementById(contenedor).innerHTML = "<img src='imagenes/preload1.gif width='16' height='16'>";
    $.get(url, {}, function (data) {
        $("#" + contenedor).html(data);
    });
}
// NUEVA ESPECIALIDAD
function nuevaespecialidad(contenedor) {
    //Variables que proviene del formulario de insertar.php
    var codigoespecialidad = $('#codigoespecialidad').val();
    var especialidad = $('#especialidad').val();
    //Variables que recogemos como parámetro de la función
    var contenedor = contenedor;
    if (especialidad != "") {
        document.getElementById(contenedor).innerHTML = "<img src='imagenes/preload1.gif width='16' height='16'>";
        $.get("especialidadbd.php", {
            codigoespecialidad: codigoespecialidad,
            especialidad: especialidad
        }, function (data) {
            $("#" + contenedor).html(data);
        });
    } else {
        alert("DEBE INGRESAR UNA ESPECIALIDAD");
    }
}
//NUEVO ALUMNO
function alumno(contenedor) {
    //Variables que proviene del formulario de insertar.php
    var codigo = $('#codigo').val();
    var nombres = $('#nombres').val();
    var apellidos = $('#apellidos').val();
    var codigoespecialidad = $('#codigoespecialidad').val();
    var codigocliclo = $('#codigocliclo').val();
    var codigocurso = $('#codigocurso').val();
    var promedio = $('#promedio').val();
    var codigociudad = $('#codigociudad').val();
    //Variables que recogemos como parámetro de la función
    var contenedor = contenedor;
    if (nombres != "" && apellidos != "" && codigoespecialidad !="" && codigocliclo !="" && codigocurso != "" && promedio != "" && codigociudad !="") {
        document.getElementById(contenedor).innerHTML = "<img src='imagenes/preload1.gif width='16' height='16'>";
        $.get("alumnosbd.php", {
            codigo: codigo,
            nombres: nombres,
            apellidos: apellidos,
            codigoespecialidad: codigoespecialidad,
            codigocliclo: codigocliclo,
            codigocurso: codigocurso,
            promedio: promedio,
            codigociudad: codigociudad
        }, function (data) {
            $("#" + contenedor).html(data);
        });
    } else {
        alert("ALGUNOS DE LOS CAMPOS ESTAN VACIOS, INTENTE NUEVAMENTE");
    }

}
//NUEVO CICLO
function nuevociclo(contenedor) {
    //Variables que proviene del formulario de insertar.php
    var codigocliclo = $('#codigocliclo').val();
    var ciclo = $('#ciclo').val();
    //Variables que recogemos como parámetro de la función
    var contenedor = contenedor;
    if (ciclo != "") {
        document.getElementById(contenedor).innerHTML = "<img src='imagenes/preload1.gif width='16' height='16'>";
        $.get("ciclobd.php", {
            codigocliclo: codigocliclo,
            ciclo: ciclo
        }, function (data) {
            $("#" + contenedor).html(data);
        });
    } else {
        alert("DEBE INGRESAR UN CICLO");
    }
}
//NUEVA CIUDAD
function nuevaciudad(contenedor) {
    //Variables que proviene del formulario de insertar.php
    var codigociudad = $('#codigociudad').val();
    var ciudad = $('#ciudad').val();
    //Variables que recogemos como parámetro de la función
    var contenedor = contenedor;
    if (ciudad != "") {
        document.getElementById(contenedor).innerHTML = "<img src='imagenes/preload1.gif width='16' height='16'>";
        $.get("ciudadbd.php", {
            codigociudad: codigociudad,
            ciudad: ciudad
        }, function (data) {
            $("#" + contenedor).html(data);
        });
    } else {
        alert("DEBE INGRESAR UNA CIUDAD")
    }
}
//NUEVO CURSO
function nuevocurso(contenedor) {
    //Variables que proviene del formulario de insertar.php
    var codigocurso = $('#codigocurso').val();
    var curso = $('#curso').val();
    //Variables que recogemos como parámetro de la función
    var contenedor = contenedor;
    if (curso != "") {
        document.getElementById(contenedor).innerHTML = "<img src='imagenes/preload1.gif width='16' height='16'>";
        $.get("cursobd.php", {
            codigocurso: codigocurso,
            curso: curso
        }, function (data) {
            $("#" + contenedor).html(data);
        });
    } else {
        alert("DEBE INGRESAR UNA CIUDAD")
    }
}