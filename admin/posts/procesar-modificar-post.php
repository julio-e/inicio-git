<?php 

if(isset($_POST['titulo'],$_POST['contenido'],$_POST['temas'])){
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $temas = $_POST['temas'];
    include '../../conexion.php';
    $consulta ="UPDATE posts SET titulo='$titulo', contenido='$contenido', temas='$temas' WHERE id_post = $id";
    if(mysqli_query($conexion, $consulta)){
        header('location:index.php?exito=modificacion');
    }
    echo 'error';
    //header('location:../../index.php');
}

?>