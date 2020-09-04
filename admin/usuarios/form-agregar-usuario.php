<?php include '../../header.php'; ?>

<form method='post'
action="procesar-agregar-usuario.php">
<div class="form-group">
<label for="titulo">Nombre</label>
<input class="form-control" type="text" name="nombre" id="email">
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" name="email" id="email">
</div>

<div class="form-group">
<label for="password">Password</label>
<input class="form-control" type="password" name="password" id="password">
</div>


<button class="btn btn-primary mb-2 ml-2" type="submit">Enviar</button>

</form>

<?php include '../../footer.php' ?>