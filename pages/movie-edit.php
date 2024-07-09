<?php
include "../conexion.php";

$id = $_GET["id_movie"];

$editarDatos = "SELECT * FROM `registro-movies` WHERE id_movie='$id'";

$updateMovie = mysqli_query( $conexion, $editarDatos );


if( $fila = mysqli_fetch_array($updateMovie) ) {}
?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link de CSS -->
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- Link a fav icon -->
    <link rel="shortcut icon" href="../public/img/favicon.png" type="image/x-icon">
    <!-- Link a iconos -->
    <script src="https://kit.fontawesome.com/31640eb81d.js" crossorigin="anonymous"></script>
    <!-- Link de fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Editar Movie | CAC-MOVIES</title>

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

        <section class="bg-grey register">

            <!-- Form de registro -->
            <form action="update-movie.php" method="post">

                <h1>Editar película</h1>
                    
                <div>
                    <input type="text" name="id_movie" class="register-input" value="<?php echo $fila['id_movie'] ?>">
                </div>

                <div>
                    <input type="text" name="titulo" placeholder="Título" class="register-input" value="<?php echo $fila['titulo'] ?>">
                </div>

                <div>
                    
                    <input type="text" name="genero" placeholder="Género" class="register-input" value="<?php echo $fila['genero'] ?>">

                </div>

                <div>
                    <input type="text" name="anio" placeholder="Año" class="register-input" value="<?php echo $fila['anio'] ?>">
                </div>

                <div>
                    
                    <input type="text" name="director" placeholder="Director" class="register-input" value="<?php echo $fila['director'] ?>">

                </div>

                <div>
                    <input type="text" name="calificacion"  placeholder="Calificación" class="register-input" value="<?php echo $fila['calificacion'] ?>">
                </div>

                <div>
                    <input type="text" name="descripcion" placeholder="Descripción" class="register-input" value="<?php echo $fila['descripcion'] ?>"></input>
                </div>

                <div>
                    <input type="submit" name="actualizar" value="Actualizar" class="bg-red register-button">
                </div>

            </form>

        </section>

    </main>
    
</body>

</html>