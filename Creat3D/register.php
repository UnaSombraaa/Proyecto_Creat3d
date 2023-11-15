<?php
include 'config.php';

$message = array(); // Inicializamos un array para almacenar mensajes de error o éxito

if(isset($_POST['submit'])){
   // Obtener los valores de los campos del formulario
   $nombre = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
   $user_type = $_POST['user_type'];

   // Validación: Verificar que los campos obligatorios no estén vacíos
   if (empty($nombre) || empty($email) || empty($password) || empty($cpassword)) {
      $message[] = 'Todos los campos son obligatorios.';
   } else {
      // Validación: Verificar si las contraseñas coinciden
      if ($password != $cpassword) {
         $message[] = 'Las contraseñas no coinciden.';
      } else {
         // Validación: Verificar si el usuario ya existe en la base de datos
         $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('Error en la consulta');
         if(mysqli_num_rows($select_users) > 0){
            $message[] = 'El usuario ya existe.';
         } else {
            // Utiliza password_hash para almacenar la contraseña de forma segura
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insertar en la base de datos solo si pasa todas las validaciones
            mysqli_query($conn, "INSERT INTO `users` (name, email, password, user_type) VALUES ('$nombre', '$email', '$hashed_password', '$user_type')") or die('Error al registrar el usuario.');
            $message[] = 'Registrado exitosamente.';
            header('Location: login.php'); // Redirige a la página de inicio de sesión después del registro.
         }
      }
   }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.scss">

</head>
<body>
<style>
      /* Personalización de estilos */ 
      .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .form-group {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px; /* Ajusta el margen inferior según sea necesario */
      }

      .form-group label {
        flex: 1;
        text-align: right;
        padding-right: 10px; /* Espacio entre la etiqueta y el campo */
      }

      .form-group input {
        flex: 2;
      }

      .form-group input[type="password"] {
        text-align: center;
      }
</style>


<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
   <section class="min-vh-100" style="background-color: #9A616D;">
  <div class="container h-75 w-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="images/img1.jpg"
                alt="registration form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black mx-auto" style="max-width: 400px;">

                <form method="POST"  action="register.php">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: rgb(191, 22, 140)"></i>
                    <span class="h1 fw-bold mb-0">¡BIENVENIDO A CREAT3D!</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Regístrate en tu cuenta</h5>
                
                  <div class="form-outline mb-4">
                    <input name="name" type="text" id="formNombre" class="form-control form-control-lg" placeholder="Ingresa tu nombre" />
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input name="email" type="email" id="formEmail" class="form-control form-control-lg" placeholder="Ingresa tu Email" />
                  </div>

                  <div class="form-outline mb-4">
                    <input name="password" type="password" id="formContrasena" class="form-control form-control-lg" placeholder="Ingresa una Contraseña" />
                  </div>

                  <div class="form-outline mb-4">
                    <input name="cpassword" type="password" id="formConfirmarContrasena" class="form-control form-control-lg" placeholder="Confirma la contraseña" />
                  </div>

                  <div id="error-message" class="text-danger"></div>

                  <div class="form-outline mb-4">
                    <select name="user_type" class="form-control form-control-lg">
                      <option value="user">Usuario</option>
                      <option value="admin">Administrador</option>
                    </select>
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block1" type="submit" value="register now" name="submit">
                  </div>

                  <a class="small text-muted" href="#!">¿Olvidaste la contraseña?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Ya tienes una cuenta? <a href="login.php"
                      style="color: #393f81;">Inicia sesión aquí</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
<!--

</body>
</html>
 -->

</body>
</html>