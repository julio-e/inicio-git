<?php 

if(isset($_GET['id_post'])){
    $id = $_GET['id_post'];
    //preparar consulta
    $consulta = "SELECT * FROM posts WHERE id_post = $id";
    //inluir conexion
    include '../../conexion.php';

    if($datos = mysqli_query($conexion, $consulta)){
    //aqui usaremos los datos
        while($fila = mysqli_fetch_array($datos)){
            include 'template-form-modificar-post.php';
        }
    
    }

}










?>


