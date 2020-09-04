<?php 
include '../../header.php';
include '../../conexion.php';


if(!$conexion){
    //si falla la conexion
    echo 'No has podido conectarte, revisa los datos de acceso';
}else{
    //echo 'Tienes una conexion excelente';
    //preparamos la consulta
    $consulta ="SELECT * FROM posts";
    if($datos = mysqli_query($conexion, $consulta)){
        //aqui usaremos los datos
        //boton para añadir post
        echo "<a class='btn btn-success' href='form-agregar-post.php'>Nuevo Post</a>";

        //empieza la tabla
        echo "<table class='table'>
        <thead>
          <tr>
            <th scope='col'>id</th>
            <th scope='col'>Titulo</th>
            <th scope='col'>Publicado</th>
          </tr>
        </thead>
        <tbody>";
        while($fila = mysqli_fetch_array($datos)){
            include 'template-tabla-admin.php';
        }
        //termina la tabla
        echo "</tbody>
        </table>";


        mysqli_close($conexion);

    }else{
        echo 'No se ha podido realizar la consulta';
    }
    //var_dump($datos);
}

include '../../footer.php';

?>