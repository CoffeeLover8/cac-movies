<?php

include "../conexion.php";

$id = $_POST["id_movie"];
$titulo = $_POST[ "titulo" ];
$genero = $_POST[ "genero" ];
$anio = $_POST[ "anio" ];
$director = $_POST[ "director" ];
$calificacion = $_POST[ "calificacion" ];
$descripcion = $_POST[ "descripcion" ];

$editarMovie = "UPDATE `registro-movies` SET titulo='$titulo', genero='$genero', anio='$anio', director='$director', calificacion='$calificacion', descripcion='$descripcion' WHERE id_movie='$id'";

$update = mysqli_query( $conexion, $editarMovie );

if( $update ) {

    echo "<script>
    location.href='movies-admin.php';
    </script>";
    
} else {

    echo "<script>
    alert('Ingrese datos correctos');
    location.href='movie-edit.php?id_movie=".$id."';
    </script>";
}


?>