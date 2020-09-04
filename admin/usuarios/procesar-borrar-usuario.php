<?php 


if(isset($_GET['id_usuario'])){

    $id = $_GET['id_usuario'];

    $consulta = "DELETE FROM usuarios WHERE id_usuario = $id";
    include '../../conexion.php';
    if(mysqli_query($conexion, $consulta)){
        echo 'donete';
    }else{
        echo ' nanai';
    }
}

?>