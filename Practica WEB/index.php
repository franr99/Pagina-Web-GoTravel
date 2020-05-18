<!DOCTYPE html>

<html lang = "es">

    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title> Inicio </title>
        <link rel=stylesheet type="text/css" href="css/estilos.css">
        <link rel=stylesheet type="text/css" href="css/reserva.css">
        <link rel=stylesheet type="text/css" href="css/slider.css">
        <link rel=stylesheet type="text/css" href="css/navegador.css">
        <link rel=stylesheet type="text/css" href="css/reset.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    

    </head>
    <body>
        <?php
            session_start();
            $varnombre = $_SESSION['nombre'];
            error_reporting(0);
            
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
            <aside><a href="login.php"><button type="button" class="btnPerfil"> <?php if($varnombre == null || $varnombre == '')
                                                                                            echo "Mi perfil";
                                                                                        else
                                                                                            echo $varnombre ?> </button></a></aside>
        </header>

        <main class="main">

                <section class="slides">
                    <section class="booking-form-box">
                        <article class="radio-btn">
                            <input type="radio" class="btn" name="check" checked = "checked"><span>Ida y vuelta</span>`
                            <input type="radio" class="btn" name="check"><span>Solo ida</span>
                            <input type="radio" class="btn" name="check"><span>Muliples destinos</span>
                        </article>
                        <article class="booking-form">
                            <label> Origen</label>
                            <input type="text" id="idOrigen" class="form-control" placeholder="Ciudad o aeropuerto de origen">
                            <label> Destino</label>
                            <input type="text" id="idDestino" class="form-control" placeholder="Ciudad o aeropuerto de destino">
                            
                        </article>

                        <article class="input-grp">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input type="date" class="form-control select-date" >
                            <label class="datosreserva"> Fecha de regreso</label>
                            <input type="date" class="form-control select-date" >
                            <label class="datosreserva"> Adultos</label>
                            <input type="number" class="form-control" value="0">
                            <label class="datosreserva"> Niños</label>
                            <input type="number" class="form-control" value="0">
                            <label class="datosreserva"> Clase</label>

                            <select class="custom-select">
                            <option value="1">Clase turista</option>
                            <option value="2">Turista premium</option>
                            <option value="3">Business</option>
                            <option value="4">Primera</option>
                            </select>
                        </article>

                        <article class="input-grp">
                            <button type="button" id="btBuscar" class="btn btn-primary flight"> Buscar</button>
                        </article>

                    </section>  
                     
                    <section class ="slider-auto">
                        <ul>
                            <li><img src="img/madrid_slider.jpg" alt=""></li>
                            <li><img src="img/paris_slider.jpg" alt=""></li>
                            <li><img src="img/new_york_slider.jpg" alt=""></li>
                            <li><img src="img/londres_slider.jpg" alt=""></li>
                            
                        </ul>
                        
                    </section>
                    
                    
                </section>

            
            <ul class="ciudad-destino">
                <h1> Destinos destacados</h1>
                <li><a href="destinos.php"><img src="img/tokyo_des.jpg"></a><h4> Tokyo</h4></li>
                <li><a href="destinos.php"><img src="img/paris_des.jpg"></a><h4> Paris</h4></li>
                <li><a href="destinos.php"><img src="img/new_york_des.jpg"></a><h4> New York</h4></li>
                <li><a href="destinos.php"><img src="img/londres_des.jpg"></a><h4> Londres</h4></li>
                <li><a href="destinos.php"><img src="img/cracovia_des.jpg"></a><h4> Cracovia</h4></li>
                <li><a href="destinos.php"><img src="img/berlin_des.jpg"></a><h4> Berlin</h4></li>
            </ul>
        
          
            <section class="info-reserva">
                <h1 class="h1-2"> ¿Porque reservar con nosotros? </h1>
                <article class="bio-reserva">
                    <p> Somos una agencia de viajes entregada a nuestros clientes y siempre buscamos ofrecer unos servicios de calidad acompañados del mejor precio posible. 
                    Para ello contamos con una gran variedad de destinos para satisfacer las necesidades de todos nuestros clientes, asi como una gran cantidad de hoteles y empresas que colaboran
                    con nosotros para ofrecer unos precios realmente increibles que otras compañias no llegan a ofrecer. No te lo pienses dos veces y reserva uno de nuestros increibles viajes.
                    </p>
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