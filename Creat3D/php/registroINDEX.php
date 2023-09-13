<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
<section class="min-vh-100" style="background-color: #9A616D;">
  <div class="container h-75 w-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../img/img1.jpg"
                alt="registration form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black mx-auto" style="max-width: 400px;">

                <form method="POST" class="formulario__register" action="registro.php">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">¡BIENVENIDO A CREAT3D!</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Regístrate en tu cuenta</h5>

                
                  <div class="form-outline mb-4">
                    <input name="nombre" type="text" id="formNombre" class="form-control form-control-lg" placeholder="Nombre" />
                  </div>
                  

                  <div class="form-outline mb-4">
                    <input name="apellido" type="text" id="formApellidos" class="form-control form-control-lg" placeholder="Apellidos" />
                  </div>

                  <div class="form-outline mb-4">
                    <input name="email" type="email" id="formEmail" class="form-control form-control-lg" placeholder="Correo Electrónico" />
                  </div>


                  <div class="form-outline mb-4">
                    <input name="contrasena" type="password" id="formContrasena" class="form-control form-control-lg" placeholder="Contraseña" />
                  </div>

                  <div class="form-outline mb-4">
                    <input name="confirmar_contraseña" type="password" id="formConfirmarContrasena" class="form-control form-control-lg" placeholder="Confirmar Contraseña" />
                  </div>

                  <div id="error-message" class="text-danger"></div>

                  <div class="form-outline mb-4">
                    <input name="edad" type="date" id="formFechaNacimiento" class="form-control form-control-lg" />
                    <label class="form-label" for="formFechaNacimiento">Fecha de Nacimiento</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block1" type="submit" value="Registrarse" name="register">
                  </div>

                  <a class="small text-muted" href="#!">¿Olvidaste la contraseña?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Ya tienes una cuenta? <a href="../index.php"
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
</body>
</html>
