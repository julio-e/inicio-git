<?php 
//mostrar lista de usuarios
include '../../header.php';
if(isset($_GET['exito']) && $_GET['exito']==='modificacion'){
    echo '<div class="alert alert-success" role="alert">
  Has modificado el usuario con exito
</div>';
}


echo '<a class="btn btn-success mt-2 ml-2" href="form-agregar-usuario.php">Añadir usuario</a>';

include '../../conexion.php';
if(!$conexion){
    echo 'No se ha podido establecer la conexion';
}else{
    

    $consulta = "SELECT * FROM usuarios";

    $datos = mysqli_query($conexion, $consulta);
    if($datos){
        echo "<table class='table'>
        <thead>
          <tr>
            <th scope='col'>Id</th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Email</th>
            <th scope='col'>Password</th>
            <th scope='col'>Modificar</th>
            <th scope='col'>Borrar</th>
          </tr>
        </thead>
        <tbody>";
        while($fila = mysqli_fetch_array($datos)){
            include 'template-tabla-usuarios.php';
        }
        echo "</tbody>
        </table>";


    }else{
        echo 'Ha fallado la consulta';
    }

}

include '../../footer.php';
?>