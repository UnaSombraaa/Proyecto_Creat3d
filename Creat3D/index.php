<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="css/formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container  h-100 w-75">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center ">
              <div class="card-body p-4 p-lg-5 text-black ">

                <form method="POST" class="formulario__login" action="php/login.php">
                  <h1>
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">
                        <div class="logo">
                        <h1>CREAT <span style="color: rgb(191, 22, 140);">3D</span></h1>
                        </div>
                      </span>
                    </div>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia sesion en tu cuenta</h5>
                    <div class="form-outline mb-4">
                      <input name="email" type="email" id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Correo Electronico</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input name="contrasena" type="password" id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Contraseña</label>
                    </div>
                    <div class="pt-1 mb-4">
                      <input class="btn btn-dark btn-lg btn-block" type="submit" value="Iniciar Sesion" name="iniciar_Sesion">
                    </div>
                    <a class="small text-muted" href="#!" id="contra">Olvidaste la contraseña?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes una cuenta? <a href="php/registroINDEX.php"
                        style="color: #393f81;">Registrate aca</a></p>
                  </h1>
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
