<?php
    include('../configs/config.php');
    include('../configs/connection.php');

    $sql = 'SELECT * FROM peliculas';
    $result = mysqli_query($connection, $sql);
    $peliculas = [];
    


    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    

// Creamos una lista con cada una de las entradas de la base
// de datos usando mysqli_fetch_assoc

?>
<div class="listado-peliculas">
    <ul>
<?php
    while($data = mysqli_fetch_assoc($result)){
?>
        <li><img src="<?php echo $data['imagen']?>" width="250" height="250"><br>Titulo: <?php echo $data['titulo']; ?></li>
        <li>Director: <?php echo $data['director']; ?></li>
        <li>Genero: <?php echo $data['genero']; ?></li>
        <li>Fecha: <?php echo $data['fecha']; ?></li>
        <button>
            <a href="<?php echo PATH_PROYECT?>/pages/movie.php?movie_id=<?php echo $data['id'];?>">Detalles</a>
            
        </button>
        <hr>      
<?php
    }
?>
    </ul>
</div>

