<?php 

//realizar la conexion
$conexion = mysqli_connect('localhost', 'root', '', 'blog');

//cargar caracteres utf-8 en php
mysqli_set_charset($conexion, "utf8");

if(!$conexion){
    //si falla la conexion
    echo 'No has podido conectarte, revisa los datos de acceso';
}else{
    //echo 'Tienes una conexion excelente';
    //preparamos la consulta
    $consulta ="SELECT * FROM posts";
    if($datos = mysqli_query($conexion, $consulta)){
        //aqui usaremos los datos
        while($fila = mysqli_fetch_array($datos)){
            include 'templates/template-lista-posts.php';
        }
        mysqli_close($conexion);

    }else{
        echo 'No se ha podido realizar la consulta';
    }
    var_dump($datos);
}

?>