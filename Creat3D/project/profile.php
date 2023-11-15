<?php include 'layout/header.php'; ?>

<?php

include 'config.php';

session_start();
session_unset();
session_destroy();

header('location:login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    
</body>
</html>







<?php include 'layout/footer.php'; ?>