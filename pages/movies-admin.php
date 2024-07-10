<?php 
include "../conexion.php"; 

$consultarDatos = "SELECT * FROM `registro-movies` LIMIT 10";

$readMovies = mysqli_query($conexion, $consultarDatos);

?>


<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link de CSS -->
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- Link de fav icon -->
    <link rel="shortcut icon" href="../public/img/favicon.png" type="image/x-icon">
    <!-- Link de iconos -->
    <script src="https://kit.fontawesome.com/31640eb81d.js" crossorigin="anonymous"></script>
    <!-- Link de fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Administrador de películas | CAC-MOVIES</title>

</head>


<body class="bg-popcorn">

    <!-- Comienza header -->
    <header class="header-register">

        <!-- Logo CAC-Movies -->
        <a href="../index.html" class="logo">
            <i class="fa-solid fa-film"></i>
            <span>CAC-Movies</span>
        </a>

    </header>

    <!-- Comienza main -->
    <main>

        <section class="bg-grey admin-movies">

            <h1>Administrador de películas</h1>

            <!-- Tabla de administración de películas -->
            <table>

                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Género</th>
                    <th>Año</th>
                    <th>Director</th>
                    <th>Calificación</th>
                    <th>Descripción</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>

                <?php while( $fila = mysqli_fetch_array($readMovies) ) { ?>
                <tr>
                    <td> <?php echo $fila["id_movie"] ?> </td>
                    <td> <?php echo $fila["titulo"] ?> </td>
                    <td> <?php echo $fila["genero"] ?> </td>
                    <td> <?php echo $fila["anio"] ?> </td>
                    <td> <?php echo $fila["director"] ?> </td>
                    <td> <?php echo $fila["calificacion"] ?> </td>
                    <td> <?php echo $fila["descripcion"] ?> </td>
                    <td><a href="movie-edit.php?id_movie=<?php echo $fila['id_movie'] ?>"><i class="fa-solid fa-pencil"></i></a></td>
                    <td><a href="delete-movie.php?id_movie=<?php echo $fila['id_movie'] ?>"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                <?php } ?>

            </table>

            <a href="movies-register.html" class="help">Registrar película</a>

        </section>

    </main>
    
</body>

</html>