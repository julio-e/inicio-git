<?php 

var_dump($_POST);

if(isset($_POST['nombre'],$_POST['email'],$_POST['password'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    include '../../conexion.php';
    //preparar consulta
    $consulta = "INSERT INTO usuarios(id_usuario, nombre, email, `password`) VALUES ('0', '$nombre', '$email', '$password')";
    //realizar la consulta
    if(mysqli_query($conexion, $consulta)){
        echo 'nice';
    }else{
        echo 'btzzz';
    }
}

?>