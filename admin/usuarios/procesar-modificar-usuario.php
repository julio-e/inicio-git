<?php 

if(isset($_POST['nombre'],$_POST['email'],$_POST['password'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    include '../../conexion.php';
    $consulta ="UPDATE usuarios SET nombre='$nombre', email='$email', `password`='$password' WHERE id_usuario = $id";
    if(mysqli_query($conexion, $consulta)){
        header('location:index.php?exito=modificacion');
    }
    echo 'error';
    //header('location:../../index.php');
}

?>