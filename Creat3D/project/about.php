<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.scss">

</head>
<body>
   
<?php include 'layout/header.php'; ?>

<div class="heading">
   <h3>sobre nosotros</h3>
   <p> <a href="home.php">Inicio</a> / acerca de nosotros </p>
</div>

<section class="about">
   <div class="flex">

      <div class="image">
         <img src="images/fondo_ciudad.webp" alt="">
      </div>

      <div class="content">
         <h3>Porque Elegirnos?</h3>
         <p>Elige Creat3D, nuestra plataforma de modelos 3D, y accederás a una asombrosa variedad de creatividad tridimensional. 
            Ofrecemos una extensa y diversa colección de modelos que se actualiza constantemente, desde personajes para tus juegos favoritos hasta objetos decorativos para tu hogar. 
            Lo mejor de todo, muchos de estos modelos están disponibles para descarga gratuita, apoyando a artistas talentosos con la opción de donar. 
            Nuestra versatilidad te permite utilizar estos modelos en impresiones 3D o proyectos de juegos, y mantenemos altos estándares de calidad para garantizar tu satisfacción.
            Además, nuestra plataforma intuitiva y activa comunidad hacen que tu experiencia sea inigualable. 
            Creat3D es la puerta de entrada a un mundo ilimitado de creatividad 3D, accesible para todos, desde principiantes hasta profesionales experimentados.
            Únete a nosotros hoy y descubre lo que tenemos para ofrecer; tu próxima gran creación 3D te espera en Creat3D.</p>
         <a href="contact.php" class="btn">contactanos</a>
      </div>

   </div>

</section>



<?php include 'layout/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>