<?php

include "../conexion.php";

$id = $_GET["id_movie"];

$eliminarMovie = "DELETE FROM `registro-movies` WHERE id_movie='$id'";

$deleteMovie = mysqli_query( $conexion, $eliminarMovie );

if( $deleteMovie ) {

    echo "<script>
    location.href='movies-admin.php';
    </script>";

}else {

    echo "<script>
    alert('Ocurrió un error al eliminar');
    location.href='movies-admin.php';
    </script>";
}


?>