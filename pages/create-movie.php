<?php

include "../conexion.php";

$titulo = $_POST[ "titulo" ];
$genero = $_POST[ "genero" ];
$anio = $_POST[ "anio" ];
$director = $_POST[ "director" ];
$calificacion = $_POST[ "calificacion" ];
$descripcion = $_POST[ "descripcion" ];

$insertarDato = "INSERT INTO `registro-movies`( titulo, genero, anio, director, calificacion, descripcion ) VALUES( '$titulo', '$genero', '$anio', '$director', '$calificacion', '$descripcion' )";

$create = mysqli_query( $conexion, $insertarDato );

if( $create ) {

    // echo "Se guardo correctamente";
    echo "<script>
    location.href='movies-admin.php';
    </script>";

} else {

    // echo "Ocurrio un error";
    echo "<script>
    alert('Ocurrió un error al registrar la película');
    location.href='movies-register.html';
    </script>";
}

?>