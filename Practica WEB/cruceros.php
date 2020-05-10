<!DOCTYPE html>

<html lang = "es">

    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title> Inicio </title>
        <link rel=stylesheet type="text/css" href="css/navegador.css">
        <link rel=stylesheet type="text/css" href="css/cruceros.css">
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
        
        <img src="img/crucero_intro.jpg" class="fondoMenu" alt="">


            <section class="compañias">
                <h1> Compañias</h1>
                <ul class="listaCompañias">
                    <li class="compañia"> <img src="img/msc_cruceros.jpg." class="compañia_img"></li>
                    <li class="compañia"> <img src="img/norwegian_cruceros.jpg." class="compañia_img"></li>
                    <li class="compañia"> <img src="img/pullmantur_cruceros.jpg" class="compañia_img"></li>
                    <li class="compañia"> <img src="img/costa_cruceros.jpg" class="compañia_img"></li>

                </ul>
            </section>


        <section class="seccionOfertas">

            <h1> Cruceros</h1>
            <ul class="listaOfertas">
               
                <li class="ofertas">
     
                    <img src="img/cruceros_med.jpg" class="imagen">
                    <h2>Italia</h2>
                    <p class="descripcion">Descubre Roma y Napoles con nuestros cruceros MSC al mejor precio</p>
                    <p class="duracion">6 días, salida desde Barcelona.</p>
                    <form action="conexiones/reservaCrucero.php" method="POST">
                        <input type="hidden" name="idCrucero" value="Italia"/>
                        <input type="hidden" name="compania" value="MSC">
                        <input type="hidden" name="origen" value="Barcelona">
                        <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                                <option value="2">habitación familiar</option>
                            </select>
                        <h4>Desde 450€</h4>
                        <a href="#"><button type="submit" class="btnOferta"> Mostrar más</button></a>
                    </form>
                </li>

                <li class="ofertas">
     
                    <img src="img/msc_cruceros2.jpg" class="imagen">
                    <h2>Islas Griegas</h2>
                    <p class="descripcion">Descubre Grecia con nuestros cruceros MSC al mejor precio</p>
                    <p class="duracion">7 días, salida desde Barcelona.</p>
                    
                    <form action="conexiones/reservaCrucero.php" method="POST">
                        <input type="hidden" name="idCrucero" value="Islas Griegas"/>
                        <input type="hidden" name="compania" value="MSC">
                        <input type="hidden" name="origen" value="Barcelona">
                        <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                                <option value="2">habitación familiar</option>
                            </select>
                        <h4>Desde 550€</h4>
                        <a href="#"><button type="submit" class="btnOferta"> Mostrar más</button></a>
                    </form>
                </li>

                <li class="ofertas">
     
                    <img src="img/msc_cruceros3.jpg" class="imagen">
                    <h2>Atlantico</h2>
                    <p class="descripcion">Descubre Londres, Dublin y las Islas Feroe con nuestros cruceros MSC al mejor precio</p>
                    <p class="duracion">8 días, salida desde Cadiz.</p>
                    
                    <form action="conexiones/reservaCrucero.php" method="POST">
                        <input type="hidden" name="idCrucero" value="Atlantico"/>
                        <input type="hidden" name="compania" value="MSC">
                        <input type="hidden" name="origen" value="Cadiz">
                        <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                                <option value="2">habitación familiar</option>
                            </select>
                        <h4>Desde 500€</h4>
                        <a href="#"><button type="submit" class="btnOferta"> Mostrar más</button></a>
                    </form>
                </li>

                <li class="ofertas">
     
                    <img src="img/pullmantur_cruceros2.jpg" class="imagen">
                    <h2>Atlantico</h2>
                    <p class="descripcion">Descubre Lisboa, Londres y Dublín con nuestros cruceros Pullmantur</p>
                    <p class="duracion">7 días, salida desde Cadiz.</p>
                    
                    <form action="conexiones/reservaCrucero.php" method="POST">
                        <input type="hidden" name="idCrucero" value="Atlantico"/>
                        <input type="hidden" name="compania" value="Pullmantur">
                        <input type="hidden" name="origen" value="Cadiz">
                        <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                                <option value="2">habitación familiar</option>
                            </select>
                        <h4>Desde 450€</h4>
                        <a href="#"><button type="submit" class="btnOferta"> Mostrar más</button></a>
                    </form>
                </li>

                <li class="ofertas">
     
                    <img src="img/pullmantur_cruceros3.jpg" class="imagen">
                    <h2>Mediterraneo</h2>
                    <p class="descripcion">Descubre Ibiza, Roma y Atenas con nuestros cruceros Pullmantur</p>
                    <p class="duracion">8 días, salida desde Barcelona.</p>
                    
                    <form action="conexiones/reservaCrucero.php" method="POST">
                        <input type="hidden" name="idCrucero" value="Mediterraneo"/>
                        <input type="hidden" name="compania" value="Pullmantur">
                        <input type="hidden" name="origen" value="Barcelona">
                        <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                                <option value="2">habitación familiar</option>
                            </select>
                        <h4>Desde 600€</h4>
                        <a href="#"><button type="submit" class="btnOferta"> Mostrar más</button></a>
                    </form>
                </li>

                <li class="ofertas">
     
                    <img src="img/norwegian_cruceros2.jpg" class="imagen">
                    <h2>Europa del norte</h2>
                    <p class="descripcion">Descubre Oslo, Helsinki y Estocolmo con nuestros cruceros Norwegian</p>
                    <p class="duracion">9 días, salida desde Galicia.</p>
                    
                    <form action="conexiones/reservaCrucero.php" method="POST">
                        <input type="hidden" name="idCrucero" value="Europa del norte"/>
                        <input type="hidden" name="compania" value=Norwegian">
                        <input type="hidden" name="origen" value="Galicia">
                        <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                                <option value="2">habitación familiar</option>
                            </select>
                        <h4>Desde 1500€</h4>
                        <a href="#"><button type="submit" class="btnOferta"> Mostrar más</button></a>
                    </form>
                </li>

                <li class="ofertas">
     
                    <img src="img/cruceros_norweigan.jpg" class="imagen">
                    <h2>Mar del norte</h2>
                    <p class="descripcion">Descubre Oslo, Copenhague, y Helsinki con nuestros cruceros Norwegian</p>
                    <p class="duracion">9 días, salida desde Galicia.</p>
                    
                    <form action="conexiones/reservaCrucero.php" method="POST">
                        <input type="hidden" name="idCrucero" value="Mar del norte"/>
                        <input type="hidden" name="compania" value="Norwegian">
                        <input type="hidden" name="origen" value="Galicia">
                        <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                                <option value="2">habitación familiar</option>
                            </select>
                        <h4>Desde 1200€</h4>
                        <a href="#"><button type="submit" class="btnOferta"> Mostrar más</button></a>
                    </form>
                </li>

                <li class="ofertas">
     
                    <img src="img/costa_cruceros2.jpg" class="imagen">
                    <h2>Mediterraneo</h2>
                    <p class="descripcion">Descubre Ibiza, Niza, Roma y Napoles con nuestros cruceros Costa</p>
                    <p class="duracion">8 días, salida desde Valencia.</p>
                    
                    <form action="conexiones/reservaCrucero.php" method="POST">
                        <input type="hidden" name="idCrucero" value="Mediterraneo"/>
                        <input type="hidden" name="compania" value="Costa">
                        <input type="hidden" name="origen" value="Valencia">
                        <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                                <option value="2">habitación familiar</option>
                            </select>
                        <h4>Desde 600€</h4>
                        <a href="#"><button type="submit" class="btnOferta"> Mostrar más</button></a>
                    </form>
                </li>

                

            </ul>
        </section>
        <footer class="footer">
            <section class="sobre-nosotros">
                <h2>Sobre Nosotros</h2>
                <p>Somos un grupo de estudiantes de la universidad UCAM y hemos realizado
                    esta página web como práctica final de la asigntura de Programación Web
                </p>
            </section>
            
            <section class="menu-rapido">
                <h2>Menu rápido</h2>
                <ul>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Política de cookies</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>

            </section>
            <dsection class="redes-sociales">
                <h2>Redes sociales</h2>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Youtube</a></li>
                </ul>
            </section>
            
        </footer>
        </main>
    </body>

</html>