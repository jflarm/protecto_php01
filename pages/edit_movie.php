<?php
    include('../configs/config.php');
    include('../configs/connection.php');

    $id = $_GET['movie_id'];
    $sql = "SELECT * FROM peliculas WHERE id=$id";
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);
?>

<h1>Estas editando los datos de la pelicula</h1>

<form action="<?php echo PATH_PROYECT;?>/sync/send_data.php?option=edit" method="post">
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo $data['titulo'];?>" placeholder="Titulo...">

        <label for="director">Director</label>
        <input type="text" id="director" name="director" value="<?php echo $data['director'];?>" placeholder="Director...">

        <label for="genero">Genero</label>
        <input type="text" id="genero" name="genero" value="<?php echo $data['genero'];?>" placeholder="Genero...">
    </div>

    <div>
        <label for="fecha">Fecha de Estreno</label>
        <input type="text" id="fecha" name="fecha" value="<?php echo $data['fecha'];?>" placeholder="Fecha de Estreno...">
        
        <label for="imagen">Imagen</label>
        <input type="text" id="imagen" name="imagen" value="<?php echo $data['imagen'];?>" placeholder="URL link para imagen...">
        <input type="text" name="id" value="<?php echo $id;?>" style="visibility: hidden">
    </div>
    
    <div class="bottons">
        <button type="submit">Aceptar</button>
        <button type="reset" >
            <a href="<?php echo PATH_PROYECT; ?>/">Cancelar</a>
        </button>    
    </div>

</form>