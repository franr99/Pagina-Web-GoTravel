<!DOCTYPE html>

<html lang = "es">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <link rel=stylesheet type="text/css" href="css/registrar.css">
        <title> Registrar</title>
    </head>
    <body>
        <section class="contenedor">
            <h2> Bienvenido</h2>
            <img src="img/logo-bueno.png" class="logo">
            <form action="conexiones/registro.php" method="POST">
				<input type="name" name="nombre" maxlength="20" class="form" placeholder="nombre" required>
				<input type="dir" name="direccion" maxlength="50" class="form" placeholder="direccion" required>
                <input type="email" name="email" maxlength="20" class="form" placeholder="email" required>
				<input type="password" name="contra" maxlength="50" class="form" placeholder="contraseña" required>
				<input type="password" name="contra" maxlength="50" class="form" placeholder="confirmar contraseña" required>
                <input type="submit" class="btnLogin" value="Registrarse">
            </form>
        </section>
    </body>

</html>