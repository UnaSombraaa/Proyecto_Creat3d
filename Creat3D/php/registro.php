<?php
include 'conexionDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $nombre_completo = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contraseña'];
    $fecha = $_POST['edad'];

    // Verificar que no haya campos vacíos
    if (empty($nombre_completo) || empty($apellido) || empty($email) || empty($contrasena) || empty($confirmar_contrasena) || empty($fecha)) {
        echo '<script>alert("Por favor, completa todos los campos."); window.location = "registroINDEX.php";</script>';
        exit();
    }

    // Verificar que las contraseñas coincidan
    if ($contrasena !== $confirmar_contrasena) {
        echo '<script>alert("Las contraseñas no coinciden."); window.location = "registroINDEX.php";</script>';
        exit();
    }

    // Contraseña encriptada
    $contrasena = hash('sha512', $contrasena);

    // Verificar redundancias
    $verificar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
    if (mysqli_num_rows($verificar) > 0) {
        echo '<script>alert("Este correo electrónico ya está registrado."); window.location = "registroINDEX.php";</script>';
        exit();
    }

    $query = "INSERT INTO usuarios(nombre_completo, apellido, email, contrasena, edad)
            VALUES('$nombre_completo','$apellido','$email','$contrasena','$fecha')";
    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar) {
        echo '<script>alert("Registro exitoso."); window.location = "../index.php";</script>';
    } else {
        echo '<script>alert("Error en el registro."); window.location = "registroINDEX.php";</script>';
    }

    mysqli_close($conexion);
}
?>
