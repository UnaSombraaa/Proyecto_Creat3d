<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}
?>
<?php include 'layout/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contacto</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.scss">

</head>
<body>
   


<div class="heading">
   <h3>contactenos</h3>
   <p> <a href="home.php">Inicio</a> / contactenos </p>
</div>

<section class="contact">

   <form action="" method="post">
      <h3>cuentanos !</h3>
      <input type="text" name="name" required placeholder="Ingresa tu nombre" class="box">
      <input type="email" name="email" required placeholder="Ingresa tu Email" class="box">
      <input type="number" name="number" required placeholder="Numero de contacto" class="box">
      <textarea name="message" class="box" placeholder="Tu mensaje" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="Enviar Mensaje" name="send" class="btn">
   </form>

</section>








<?php include 'layout/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>