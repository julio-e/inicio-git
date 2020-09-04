<?php 
if(isset($_POST['titulo'], $_POST['contenido'], $_POST['temas'])){
    var_dump($_POST);

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$temas = $_POST['temas'];
}
include '../conexion.php';

$consulta = "INSERT INTO posts (id_post, titulo, contenido, imagen_destacada, temas, publicado) VALUES (NULL, '$titulo', '$contenido', NULL, '$temas', NULL)";

if(mysqli_query($conexion, $consulta)){
    echo 'biennnn';

}else {
    echo 'nope';
}



?>