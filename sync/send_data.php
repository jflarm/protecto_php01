<?php
    //  3 lineas muestran errores de PHP en el browser
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    require_once('../configs/config.php');
    require_once('../configs/connection.php');


    $titulo = $_POST['titulo'];
    $director = $_POST['director'];
    $genero = $_POST['genero'];
    $fecha = $_POST['fecha'];

    // $sql = 'INSERT INTO peliculas(titulo, director, genero, fecha) VALUES("'.$titulo.'", "'.$director.'", "'.$genero.'", '.$fecha.')';
    $sql = "INSERT INTO peliculas(titulo, director, genero, fecha) VALUES ('$titulo','$director','$genero',$fecha)";
    mysqli_query($connection, $sql);
    
    echo '<script>
        alert("Pelicula agregada!")
        window.location.href="'.PATH_PROYECT.'/"
    </script>';
    
?>

<h2>Pelicula agregada correctamente.</h2>