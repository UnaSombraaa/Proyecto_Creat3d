<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pruebas</title>
   
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="body"></div>
    <!--header - menu-->
    <header>
        <div class="header-content">
            <div class="logo">
                <h1>CREAT <b>3D</b></h1>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">AMIGOS</a></li>
                        <li><a href="php/usuario.php">PERFIL</a></li>
                        <li class="menu-selected"><a href="paginaprincipal.php" class="text-menu-selected">INICIO</a></li>
                        <li><a href="index.php"></a>logOut</li>
                    </ul>
                </nav>
            </div>
            <div id="ctn-icon-search">
                <i class="fa-solid fa-magnifying-glass" id="icon-search"></i> 
            </div>
        </div>
    </header>
    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué modelo desea buscar?">
    </div>
    <ul id="box-search">
        <li><img src="img/a.jpg"><i class="fa-solid fa-magnifying-glass"></i>pekka</a></li>
        <li><a href="img/b.jpg"><i class="fa-solid fa-magnifying-glass"></i>santy</a></li>
        <li><a href="img/c.jpg"><i class="fa-solid fa-magnifying-glass"></i>minimalistas</a></li>
        <li><a href="img/d.jpg"><i class="fa-solid fa-magnifying-glass"></i>lautaro scrum master</a></li>
        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>clash royale</a></li>
        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>modelos del papu</a></li>
    </ul>
    <div id="imagenMostrada">
    <img id="imagenMostradaImg" src="" alt="">
</div>
    <div id="cover-ctn-search"></div>
    
    <!--portada - menu-->
    <div class="container-cover">
        <div class="container-info-cover">
            <h1>¡PUEDES COMPRAR O VENDER MODELOS!</h1>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas.</p>
        </div>
    </div>

    <!--boton-de-subir-->
    <div class="button-up">
        <i class="fa-solid fa-chevron-up"></i>
    </div>

    <div class="container-footer">
        <footer>
            <div class="logo-footer">
                <img src="img/img8.jpg" alt="">
            </div>
            <div class="redes-footer">
                <a href="#"><i class="fa-brands fa-instagram icon-redes-footer"></i></a>
                <a href="#"><i class="fa-brands fa-twitter icon-redes-footer"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61550747380642"><i class="fa-brands fa-facebook icon-redes-footer"></i></a>
            </div>
            <hr>
            <h4>@2023 CREAT3D - TODOS LOS DERECHOS RESERVADOS</h4>
        </footer>
    </div>


    <script src="https://kit.fontawesome.com/3979cc010c.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
