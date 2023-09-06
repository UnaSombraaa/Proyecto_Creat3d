<?php

include 'conexionDB.php';

$nombre_completo = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$fecha = $_POST['edad'];

//contraseña encriptada wey
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre_completo, apellido, email, contrasena, edad)
            VALUES('$nombre_completo','$apellido','$email','$contrasena','$fecha')";


//verificar redundancias :DDDDD
$verificar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' ");

if(mysqli_num_rows($verificar)>0){
    echo '
        <script>
            window.location ="../index.php";
        </script>
    
    ';
} 


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <scridbt>
        window.location = "../index.php";
    </script> ';
}

mysqli_close($conexion);
?>