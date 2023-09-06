<?php

include 'conexionDB.php';

$nombre_completo =$_POST('nombre');
$apellido = $_POST('apellido');
$email = $_POST('email');
$contrasena = $_POST('contrasena');

$query = "INSERT INTO usuarios(nombre_completo, apellido, email, contrasena)
            VALUES('$nombre_completo','$apellido','$email','$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
 echo '
    <script>
        window.location = "../index.php";
    </script> ';
}

mysqli_close($conexion);

?>