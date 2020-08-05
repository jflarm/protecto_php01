<?php
    include('../configs/config.php');
    include('../configs/connection.php');
    
    // var_dump($_GET);
    $movie_id = $_GET['movie_id'];
    $sql = "SELECT * FROM peliculas WHERE id=$movie_id";
    
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);

?>
<style>
    main{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        display: grid;
        grid-template: 1fr 1fr;
        grid-template-areas: "imagen detalles"


    }
    .detalles-pelicula ul{
        list-style: none;
        grid-area: detalles;
    }

    .imagen{
        grid-area: imagen;
        width: 100%;
        height: 500px;
    }

</style>

<?php   
    include(PATH_PROYECT.'/components/header.php');
?>

<main>
    <div class="imagen">
        <img src="<?php echo $data['imagen']?>" alt="Poster de pelicula" width="500" height="500">
    </div>

    <div class="detalles-pelicula">
        <ul>
            <li><?php echo $data['titulo'];?></li>
            <li><?php echo $data['director'];?></li>
            <li><?php echo $data['fecha'];?></li>
            <li><?php echo $data['genero'];?></li>
        </ul>
    </div>
</main>