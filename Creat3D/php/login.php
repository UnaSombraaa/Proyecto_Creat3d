<!DOCTYPE html>
<html>
  <head>
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <form  method="POST">
        Email <input name="email" type="email"><br>
        Contraseña <input name="contrasena" type="password"><br>
        <input class="boton" type="submit" value="Enviar" name="register">
        <br>
        <?php if (isset($msg)) echo $msg ?>
    </form>
    
  </body>
</html>