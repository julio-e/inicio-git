<?php 

include '../../header.php';

?>


<form method='post'
action="procesar-modificar-post.php">

<div class="form-group">
<label for="id">ID</label>
<input readonly value="<?php echo $fila['id_post'] ?>" class="form-control" type="text" name="id" id="id">
</div>

<div class="form-group">
<label for="titulo">Titulo</label>
<input class="form-control" type="text" name="titulo" id="titulo">
</div>

<div class="form-group">
<label for="contenido">Contenido</label>
<textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10">

</textarea>
</div>

<div class="form-group">
<label for="temas">Temas</label>
<input class="form-control" type="text" name="temas" id="temas">
</div>
<button class="btn btn-primary" type="submit">Enviar</button>

</form>


<?php 

include '../../footer.php';

?>