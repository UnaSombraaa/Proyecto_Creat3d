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

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Panel<span>Administracion</span></a>

      <nav class="navbar">
         <a href="admin_page.php">Inicio</a>
         <a href="admin_products.php">Productos</a>
         <a href="admin_orders.php">Ordenes</a>
         <a href="admin_users.php">Usuarios</a>
         <a href="admin_contacts.php">Mensajes</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>Nombre de usuario : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>Correo Electronico : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">Cerrar Sesion</a>
         <div><a href="login.php">Inicio de sesion</a> | <a href="register.php">Registro</a></div>
      </div>

   </div>

</header>