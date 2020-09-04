<?php 

include '../../header.php';

?>

<form action="procesar-modificar-usuario.php" method="POST">

<div class="form-group">
<label for="id">Id</label>
<input readonly value="<?php echo $fila['id_usuario'] ?>" class="form-control" type="text" name="id" id="id">
</div>


<div class="form-group">
<label for="nombre">Nombre</label>
<input value="<?php echo $fila['nombre'] ?>" class="form-control" type="text" name="nombre" id="nombre">
</div>

<div class="form-group">
<label for="email">Email</label>
<input value="<?php echo $fila['email'] ?>" type="email" class="form-control" name="email" id="email">
</div>

<div class="form-group">
<label for="password">Password</label>
<input value="<?php echo $fila['password'] ?>" class="form-control" type="text" name="password" id="password">
</div>


<button class="btn btn-primary mb-2 ml-2" type="submit">Enviar</button>


</form>

<?php 

include '../../footer.php';

?>