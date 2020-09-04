<?php 

if(isset($_GET['id_usuario'])){
    $id = $_GET['id_usuario'];
    //preparar consulta
    $consulta = "SELECT * FROM usuarios WHERE id_usuario = $id";
    //inluir conexion
    include '../../conexion.php';
    //realizar consulta
    if($datos = mysqli_query($conexion, $consulta)){
        while($fila = mysqli_fetch_array($datos)){
            include 'template-form-modificar-usuario.php';

        }

    }else{
        echo 'La consulta ha fallado';
    }
}else{
    header('location:../../index.php');
}

?>