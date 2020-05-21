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
            include('conexiones/conexion.php');
            $link = conectar();
            session_start();
            error_reporting(0);
            $varsesion = $_SESSION['usuario'];
            $varnombre = $_SESSION['nombre'];
            $email = $_SESSION['email'];
            $direccion = $_SESSION['direccion'];
            $id = $_SESSION['id'];
            $id_reserva = array();
            $i = 0;
            
        ?>
        <header class="header">
            <section class="container logo-nav-container">
            <canvas id="micanvas" width="410" height="110"> Este navegador no puede mostrar el contenido</canvas>
                <script>

                function cargaContextoCanvas(idCanvas){
                var elemento = document.getElementById(idCanvas);
                if(elemento && elemento.getContext){
                    var contexto = elemento.getContext('2d');
                    if(contexto){
                        return contexto;
                    }
                }
                return FALSE;
                }

                window.onload = function(){
                //Recibimos el elemento canvas
                var ctx = cargaContextoCanvas('micanvas');
                if(ctx){
                    //Creo una imagen conun objeto Image de Javascript
                    var img = new Image();
                    //indico la URL de la imagen
                    img.src = "img/logo-bueno.png";;
                    //defino el evento onload del objeto imagen
                    img.onload = function(){
                        //incluyo la imagen en el canvas
                        ctx.drawImage(img, 10, 10);
                    }
                }
                }
                </script>
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
            <aside><a href="conexiones/logout.php"><button type="button" class="btnPerfil"> Cerrar sesion</button></a></aside>
        </header>

        <main class="main">

            <section class="foto">

                <img src="img/icono-perfil.png">
                <button type="button" class="btnfoto"> <span>Cambiar foto</span></button>


            </section>

            <section class="info">
                <h2>Información personal</h2>
                <hr>
                <article><span>Nombre: <?php echo $varnombre; ?> </span> </article>
                <article><span>Email: <?php echo $email ?> </span> </article>
                <article><span>Direccion: <?php echo $direccion ?> </span> </article>

                <form action="conexiones/modificarPerfil.php" method="POST">
                    <input type="submit" class="btnmodificar" value="Modificar datos">
                </form>
                <form action="conexiones/eliminarPerfil.php" method="POST" onsubmit="return confirmation()">
                    <input type="submit" class="btneliminar" value="Eliminar cuenta"> 
                </form>

                <script>
                    function confirmation() {
                        if(confirm("Esta seguro que desea eliminar su cuenta en GoTravel?")){
                            return true;
                            }else{
                            return false;
                            }
                            }
                </script>

            </section>

            <section class="reservas">
                <h2>Reservas </h2>
                <hr>

                <article>
                
<?php
                    $qryReserva = "SELECT * FROM Reserva WHERE id_usuario = '" .$id. "'";
                    $rscReserva = mysqli_query($link, $qryReserva);
                    $filas = mysqli_num_rows($rscReserva);
                    if($filas >0){
?>
                        <table class="tabla_reservas">
                            <thead>
                            <tr>
                                <td> Compañia </td>
                                <td> Datos reserva </td>
                                <td> Origen </td>
                                <td> Destino </td>
                                <td> Fecha salida </td>
                                <td> Fecha vuelta </td>
                                <td> Modificar reserva </td>
                                <td> Eliminar reserva </td>
                            </tr>
                            </thead>
<?php
                            while($mostrar = mysqli_fetch_array($rscReserva)){
?>
                            <tr>
                                <td><?php echo $mostrar['compania'] ?></td>
                                <td><?php echo $mostrar['tipo_reserva'] ?></td>
                                <td><?php echo $mostrar['origen'] ?></td>
                                <td><?php echo $mostrar['destino'] ?></td>
                                <td><?php echo $mostrar['fecha_ini'] ?></td>
                                <td><?php echo $mostrar['fecha_fin'] ?></td>
                                <td>
                                    <form action="conexiones/modificarReserva.php" method="POST">
                                    <input type="hidden" name="id_reserva" value="<?php echo $mostrar['id_reserva'];?>">
                                    <input type="hidden" name="compania" value="<?php echo $mostrar['compania'];?>">
                                    <input type="hidden" name="tipo_reserva" value="<?php echo $mostrar['tipo_reserva'];?>">
                                    <input type="hidden" name="origen" value="<?php echo $mostrar['origen'];?>">
                                    <input type="hidden" name="destino" value="<?php echo $mostrar['destino'];?>">
                                    <input type="hidden" name="fecha_ini" value="<?php echo $mostrar['fecha_ini'];?>">
                                    <input type="hidden" name="fecha_fin" value="<?php echo $mostrar['fecha_fin'];?>">
                                    <input type="submit" class="modificarRes" value="Modificar Reserva"> 
                                    </form>
                                </td>
                                <td>
                                    <form action="conexiones/gestionReserva.php" method="POST">
                                    <input type="hidden" name="eliminar" value="<?php echo $mostrar['id_reserva'];?>">
                                    <input type="submit" class="eliminarRes" value="Eliminar Reserva"> 
                                    </form>
                                </td>
                            </tr>
<?php
                        }                        
                         
                    }else{
?>
                        <img src="img/foto-reserva.png">
                        <h2> No has reservado aún</h2>
<?php
                    }
                    
?>            
                    </table>
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