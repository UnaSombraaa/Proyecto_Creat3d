<?php
 include 'conexionDB.php';

 $email =$_POST['email'];
 $contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$email' and 
contrasena = '$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
  header("location: paginaprincipal.php");
} 
else {
  echo '<script> 
  alert("Vuelva a Intentarlo") 
  window.location = "../index.php";
  </script>';
}




?>