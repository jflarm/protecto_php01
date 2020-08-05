<?php
    include('../configs/config.php');
    include('../configs/connection.php');
    
    // var_dump($_GET);
    $movie_id = $_GET['movie_id'];
    $sql = "DELETE FROM peliculas WHERE id=$movie_id";
    
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);

    echo '<script>
        alert("Pelicula eliminada!")
        window.location.href="'.PATH_PROYECT.'/"
    </script>';
?>


