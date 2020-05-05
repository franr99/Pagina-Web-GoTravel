<!DOCTYPE html>

<html lang = "es">

    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title> Inicio </title>
        <link rel=stylesheet type="text/css" href="css/estilos.css">
        <link rel=stylesheet type="text/css" href="css/navegador.css">
        <link rel=stylesheet type="text/css" href="css/reset.css">
        <link rel=stylesheet type="text/css" href="css/perfil.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    </head>
    <body>
        <?php
            session_start();
            $varsesion = $_SESSION['usuario'];
            $varnombre = $_SESSION['nombre'];
            
            error_reporting(0);
            
        ?>
        <header class="header">
            <section class="container logo-nav-container">
                <a href="#" class="logo"><img src="img/logo-bueno.png"></a>
                <span class="menu-icon">Ver menú</span>
                <nav class="navigation">
                    <ul>
                        <li><a class="boton-home" href="index.php">Home</a></li>
                        <li><a href="destinos.php">Destinos</a></li>
                        <li><a href="hoteles.php">Hoteles</a></li>
                        <li><a href="cruceros.php">Cruceros</a></li>
                        <li><a href="tours.php">Tours</a></li>
                    </ul>
                </nav>
            </section>
            <aside><a href="login.php"><button type="button" class="btnPerfil">  <?php if($varsesion == null || $varsesion == '')
                                                                                            echo "Mi perfil";
                                                                                        else
                                                                                            echo $varnombre ?> </button></a></aside>
        </header>

        <main class="main">

            <section class="foto">

                <img src="img/icono-perfil.png">
                <button type="button" class="btnfoto"> <span>Cambiar foto</span></button>


            </section>

            <section class="info">
                <h2>Información personal</h2>
                <hr>
                <article><span>Nombre: pichula </span> </article>
                <article><span>Email: pichula@gmail.com </span> </article>
                <article><span>Direccion: Tu culo </span> </article>
                <button type="button" class="btnmodificar"> <span>Modificar datos</span></button>
                <button type="button" class="btneliminar"> <span>Eliminar cuenta</span></button>

                

            </section>

            <section class="reservas">
                <h2>Reservas </h2>
                <hr>

                <article>
                    <img src="img/foto-reserva.png">
                    <h2> No has reservado aún</h2>
                </article>
            </section>

        </main>

        <footer class="footer">
            <article class="sobre-nosotros">
                <h2>Sobre Nosotros</h2>
                <p>Somos un grupo de estudiantes de la universidad UCAM y hemos realizado
                    esta página web como práctica final de la asigntura de Programación Web
                </p>
            </article>
            
            <article class="menu-rapido">
                <h2>Menu rápido</h2>
                <ul>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Política de cookies</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>

            </article>
            <article class="redes-sociales">
                <h2>Redes sociales</h2>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Youtube</a></li>
                </ul>
            </article>
            
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/scripts.js" language="javascript" type="text/javascript"></script>

    </body>

</html>