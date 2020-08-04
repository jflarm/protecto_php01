<?php
    include('../configs/config.php');
?>

<h1>Estas agregando peliculas en add-movies</h1>

<form action="<?php echo PROJECT_PATH;?>'/sync/send_data.php" method="post">
    <label for="titulo">Titulo</label>
    <input type="text" id="titulo" name="titulo" placeholder="Titulo...">

    <label for="director">Director</label>
    <input type="text" id="director" name="director" placeholder="Director...">

    <label for="genero">Genero</label>
    <input type="text" id="genero" name="genero" placeholder="Genero...">

    <label for="fecha">Fecha de Estreno</label>
    <input type="text" id="fecha" name="fecha" placeholder="Fecha de Estreno...">

    <button type="submit">Agregar</button>
    <button type="reset">Cancelar</button>
</form>