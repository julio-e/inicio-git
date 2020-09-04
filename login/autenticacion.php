<?php 
session_start();
//coger variables de login
if(isset($_POST['email'], $_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    
    include '../conexion.php';

    $consulta = "SELECT * FROM usuarios";
    if($datos = mysqli_query($conexion, $consulta)){
        $coincidencia = false;
        while($fila = mysqli_fetch_array($datos)){
            if($email === $fila['email'] && $password === $fila['password']){
                $_SESSION['autenticacion'] = 'si';
                $coincidencia = true;
            }
        }
        if($coincidencia){
            header('location:../admin');
        }else{
        header('location:../');
        }
    }else{
        echo 'Esta cuenta no esta registrada';
    }


}else{
    header('location:../index.php');
}

//compararlas con la base de datos

//si coincide, le damos $_SESSION['autenticacion'] = 'si'

?>