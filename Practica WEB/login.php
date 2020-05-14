<!DOCTYPE html>

<html lang = "es">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <link rel=stylesheet type="text/css" href="css/login.css">
        <title> Login</title>
    </head>
    <body>

    <?php
        session_start();
        error_reporting(0);
        $error = $_SESSION['login'];
        $registro = $_SESSION['registro'];
        $varsesion = $_SESSION['usuario'];
        $loginReserva = $_SESSION['loginReserva'];
        if($error=='1'){
    ?>
            <script> alert("Usuario o contraseña incorrectos") </script>
    
    <?php
        }
        else if($registro=='1'){
    ?>
        <script> alert("Usuario registrado correctamente") </script>

    <?php
        }
        if($varsesion != null || !$varsesion == ''){
            Header( "Location: http://localhost/Practica%20WEB/perfil.php");
        }
        if($loginReserva=='1'){
    ?>
            <script> alert("Debe iniciar sesión para realizar una reserva");</script>
    <?php
        }
      ?>

        <section class="contenedor">
            <h2> Bienvenido</h2>
            <img src="img/logo-bueno.png" class="logo">
            <form action="conexiones/loginUsuario.php" method="POST">
                <input type="email" name="email" maxlength="50" class="form" placeholder="email" required>
                <input type="password" name="contra" maxlength="50" class="form" placeholder="contraseña" required>
                <input type="submit" class="btnLogin" value="Iniciar Sesión">
            </form>
            <p class="registro">¿No tienes cuenta? <a href="registrar.php"> Registrarse</a></p>
        </section>

    </body>

</html>