<div class="card" style="width: 18rem;">
  <img class="card-img-top" width="150" src="imagenes/<?php echo $fila['imagen_destacada']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $fila['titulo']; ?></h5>
    <p class="card-text"><?php echo $fila['contenido']; ?></p>
    <a href="mostrar-post.php?id_post=<?php echo $fila['id_post']; ?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>