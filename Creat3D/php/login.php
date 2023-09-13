<?php
 include 'conexionDB.php';
 $email =$_POST['email'];
 $contrasena = $_POST['contrasena'];
 $contrasena = hash('sha512', $contrasena);

$validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' and 
contrasena = '$contrasena'");

if(mysqli_num_rows($validar) > 0){
  $_SESSION['usuario'] = $email;
  header("location: ../paginaprincipal.php");
  exit;

} else {

  echo '<script> 
  alert("Vuelva a Intentarlo") 
  window.location = "../index.php";
  </script>';
}
?>