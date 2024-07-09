<?php

include "../conexion.php";

$id = $_GET["id_movie"];

$eliminarMovie = "DELETE FROM `registro-movies` WHERE id_movie='$id'";

$deleteMovie = mysqli_query( $conexion, $eliminarMovie );

if( $deleteMovie ) {

    echo "Eliminado correctamente";

}else {

    echo "Ocurrió un error";
}


?>