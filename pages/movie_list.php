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
        <li><?php echo $data['titulo']; ?></li>
        <li><?php echo $data['director']; ?></li>
        <li><?php echo $data['genero']; ?></li>
        <li><?php echo $data['fecha']; ?></li>
        <hr>      
<?php
    }
?>
    </ul>
</div>

