<?php
    //  3 lineas muestran errores de PHP en el browser
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    require_once('../configs/config.php');
    require_once('../configs/connection.php');
    
    $id = $_POST['id'];
    $option = $_GET['option'];
    $titulo = $_POST['titulo'];
    $director = $_POST['director'];
    $genero = $_POST['genero'];
    $fecha = $_POST['fecha'];
    $imagen = $_POST['imagen'];

    if(isset($option)){
        if($option == 'edit'){
            
            $sql = "UPDATE  peliculas SET titulo='$titulo', director='$director', genero='$genero', fecha=$fecha, imagen='$imagen' WHERE id=$id";
            mysqli_query($connection, $sql);
            echo '<script>
                alert("Pelicula actualizada!")
                window.location.href="'.PATH_PROYECT.'/"
            </script>';
    
        }
    }
    else{
        // $sql = 'INSERT INTO peliculas(titulo, director, genero, fecha) VALUES("'.$titulo.'", "'.$director.'", "'.$genero.'", '.$fecha.')';
        $sql = "INSERT INTO peliculas(titulo, director, genero, fecha, imagen) VALUES ('$titulo','$director','$genero',$fecha, '$imagen')";
        mysqli_query($connection, $sql);
        
        echo '<script>
            alert("Pelicula agregada!")
            window.location.href="'.PATH_PROYECT.'/"
        </script>';
    
    }
    
?>