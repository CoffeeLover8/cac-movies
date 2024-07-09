<?php

include "conexion.php";

$titulo = $_POST[ "titulo" ];
$genero = $_POST[ "genero" ];
$anio = $_POST[ "anio" ];
$director = $_POST[ "director" ];
$calificacion = $_POST[ "calificacion" ];
$descripcion = $_POST[ "descripcion" ];

$insertarDato = "INSERT INTO `registro-movies`( titulo, genero, anio, director, calificacion, descripcion ) VALUES( '$titulo', '$genero', '$anio', '$director', '$calificacion', '$descripcion' )";


$create = mysqli_query( $conexion, $insertarDato );

if ( $insertarDato ) {
    echo "Se guardó correctamente";
} else {
    echo "Ocurrió un error";
}

?>