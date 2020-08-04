<?php
    include('../configs/config.php');
    include('../configs/connection.php');
    
    // var_dump($_GET);
    $movie_id = $_GET['movie_id'];
    $sql = "SELECT * FROM peliculas WHERE id=$movie_id";
    
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);

?>

<div>
    <img src="<?php echo $data['imagen']?>" alt="Poster de pelicula" width="500" height="500">
</div>