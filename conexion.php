<?php 

include 'datos-conexion.php';

$conexion = mysqli_connect(SERVIDOR, USUARIO, PASS, DB);

mysqli_set_charset($conexion, 'utf8');

?>