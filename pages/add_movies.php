<?php
    include('../configs/config.php');
?>

<h1>Estas agregando peliculas en add-movies</h1>

<form action="<?php echo PATH_PROYECT;?>/sync/send_data.php" method="post">
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" placeholder="Titulo...">

        <label for="director">Director</label>
        <input type="text" id="director" name="director" placeholder="Director...">

        <label for="genero">Genero</label>
        <input type="text" id="genero" name="genero" placeholder="Genero...">
    </div>

    <div>
        <label for="fecha">Fecha de Estreno</label>
        <input type="text" id="fecha" name="fecha" placeholder="Fecha de Estreno...">
        
        <label for="imagen">Imagen</label>
        <input type="text" id="imagen" name="imagen" placeholder="URL link para imagen...">
    </div>
    
    <div class="bottons">
        <button type="submit">Agregar</button>
        <button type="reset">Cancelar</button>    
    </div>

</form>