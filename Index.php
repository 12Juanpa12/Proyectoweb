<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debe iniciar sesion");
                window.location = "indexlogin.php";
            </script>
        ';
        session_destroy();
        die();
    }
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL GRECO</title>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slider.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <img id="logo" src="Imagenes/logob.PNG" >
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="">Inicio</a>
                <a href="">Marcos</a>
                <a href="">Acerca de</a>
                <a href="">Contacto</a>
            </nav>
        </div>
    </header>
    <div class="slider">
        <ul>
            <li><img src="Imagenes/slider1.png" alt=""></li>
            <li><img src="Imagenes/slider2.png" alt=""></li>
            <li><img src="Imagenes/slider3.png" alt=""></li>
            <li><img src="Imagenes/slider4.png" alt=""></li>
        </ul>
    </div>
    <center>
        <a href="php/cerrar_sesion.php">CERRAR SESION</a>
        <br>
        <br>
        <br>
    </center>
    
</body>
</html>