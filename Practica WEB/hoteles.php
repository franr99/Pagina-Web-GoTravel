<!DOCTYPE html>

<html lang = "es">

    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title> Hoteles </title>

        <link rel=stylesheet type="text/css" href="css/hoteles.css">
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

            <article class="buscador-hotel">
                
                <input type="text" class="caja-buscador" placeholder="Ciudad, zona o nombre del alojamiento">
                <button type="button" class="boton-hotel" > Buscar hoteles</button>
                
            </article>

            <section class="seccionHoteles"> 
                <h1> Hoteles</h1>
                <ul class="listaHoteles">
                   
                    <li class="hoteles">
         
                        <img src="img/hotel-berlin.jpg" class="imagen">
                        <h2>Meininger Berlin Airport</h2>
                        <p class="descripcion">El hotel se ubica en las inmediaciones del Aeropuerto Schönefeld: ideal para todos aquellos que desean hacer una breve escala en Berlín. Se llega al SXF en solo 5 minutos con el servicio de transporte público. </p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                            <input type="hidden" name="destino" value="Berlin">
                            <input type="hidden" name="compania" value="Meininger Berlin Airport"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4>Desde 50,50€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/londres-hotel.jpg" class="imagen"></a>
                        <h2>Hyde Park Executive </h2>
                        <p class="descripcion"> Si te alojas en Hyde Park Executive Apartments, en Londres (Bayswater), estarás a poca distancia de Kensington Gardens y Buckingham Palace. Este apartamento se encuentra cerca de Chinatown y University College London.</p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Londres">
                            <input type="hidden" name="compania" value="Hyde Park Executive"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 44€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
    
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-palym.jpg" class="imagen"></a>
                        <h2>Hotel Palym</h2>
                        <p class="descripcion"> El Hotel Palym está situado en una calle tranquila a solo 2 minutos de la estación Gare de Lyon, a 15 minutos a pie del estadio AccorHotels Arena. Ofrece alojamiento moderno con WiFi y servicio de cafeteria.</p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Lyon">
                            <input type="hidden" name="compania" value="Hotel Palym"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 89€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
    
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-tokio.jpg" class="imagen"></a>
                        <h2>Bespoke Hotel Shinjuku</h2>
                        <p class="descripcion"> Cercano a la estación de tren más bulliciosa de Japón. Al oeste existe un distrito de oficinas en cuyo centro se encuentran las dependencias gubernamentales metropolitanas de Tokio. Al este, un barrio con centros comerciales, cines y teatros.</p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Tokio">
                            <input type="hidden" name="compania" value="Bespoke Hotel Shinjuku"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 52€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
    
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/ryans-la-marina.jpg" class="imagen"></a>
                        <h2>Ryans La Marina</h2>
                        <p class="descripcion"> Ryans La Marina abrió sus puertas en el puerto de Ibiza en 2015, ubicado en primera línea del mar y con vistas amplias del puerto y del mediterráneo. Ofrece un estilo moderno boutique en el barrio vivo de La Marina, el barrio más vibrante de Ibiza.  </p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Ibiza">
                            <input type="hidden" name="compania" value="Ryans La Marina"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 56€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
    
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-newyork.jpg" class="imagen"></a>
                        <h2>Arlo SoHo</h2>
                        <p class="descripcion">Al estar cerca de los puntos de referencia más conocidos de Nueva York, como Empire State Building (3,3 km) y Times Square (4,3 km), Arlo SoHo es un magnífico destino para turistas.</p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="New York">
                            <input type="hidden" name="compania" value="Arlo SoHo"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 78€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
    
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/cracovia-hotel.jpg" class="imagen"></a>
                        <h2>Diamond Apartments V</h2>
                        <p class="descripcion">Diamond Apartments V es un apartamento exclusivo en el centro de Cracovia con una excelente ubicación: el edificio está junto a la estación de tranvía, cerca de los bulevares de Vístula.</p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Cracovia">
                            <input type="hidden" name="compania" value="Diamond Apartments V"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 50€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
    
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel lisboa.jpg" class="imagen"></a>
                        <h2>Hotel Pensao</h2>
                        <p class="descripcion">Se ubica en Lisboa a escasos metros del centro de la ciudad. Además de aportar la combinación ideal de calidad, comodidad y ubicación, ofrece un ambiente para familias con una amplia variedad de servicios. </p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Lisboa">
                            <input type="hidden" name="compania" value="Hotel Pensao"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 52€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
    
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-madrid.jpg" class="imagen"></a>
                        <h2>Hotel Nuevo Madrid</h2>
                        <p class="descripcion">El hotel está situado en una tranquila zona residencial de la nueva área empresarial del norte de Madrid, a solo 10 minutos del aeropuerto, del recinto ferial IFEMA, del Palacio de Congresos y del estadio de fútbol Santiago Bernabéu.</p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Madrid">
                            <input type="hidden" name="compania" value="Hotel Nuevo Madrid"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 48€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
    
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hoel-barcelona.jpg" class="imagen"></a>
                        <h2>Hotel Balmoral</h2>
                        <p class="descripcion">Hotel Balmoral 4* está situado en el centro de Barcelona, a 5 minutos de La Pedrera de Gaudí, al lado de la Diagonal de Barcelona y cerca del Passeig de Gràcia y Rambla Catalunya. Gran localización por sus fantásticas conexiones. </p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Barcelona">
                            <input type="hidden" name="compania" value="Hotel Balmoral"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 63€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
    
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-roma.jpg" class="imagen"></a>
                        <h2>Villa Eur Parco dei Pini</h2>
                        <p class="descripcion">Al estar cerca de los puntos de referencia más conocidos de Roma, como Basilica dei Santi Pietro e Paolo (1,8 km) y Ostiense (2,2 km), Hotel Villa Eur Parco Dei Pini es un magnífico destino para turistas.</p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Roma">
                            <input type="hidden" name="compania" value="Villa Eur Parco dei Pini"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 61€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
    
                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-napoli.jpg" class="imagen"></a>
                        <h2>Hotel Piazza Bellini</h2>
                        <p class="descripcion"> El Hotel Piazza Bellini se encuentra en un edificio del siglo XVI, en el centro histórico de Nápoles, a 300 metros estación de metro Dante. Las habitaciones  tienen WiFi gratuita y combinan elementos modernos de diseño y artísticos.</p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Napoles">
                            <input type="hidden" name="compania" value="Hotel Piazza Bellini"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 82€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>

                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-atenas.jpg" class="imagen"></a>
                        <h2>Hotel Evripides</h2>
                        <p class="descripcion"> Está en pleno corazón de Atenas, a pocos pasos de Ermou Street y Athens Central Market. Este hotel se encuentra cerca de Ancient Agora y Roman Agora. Además contiene sauna, gimnasio y alquiler de bicicletas.</p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Atenas">
                            <input type="hidden" name="compania" value="Hotel Evripides"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 62€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>

                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-dublin.jpg" class="imagen"></a>
                        <h2>Handels Hotel</h2>
                        <p class="descripcion"> Durante su estancia en Handels Hotel Temple Bar, los huéspedes pueden visitar Stag's Head Dublin (0,4 km) y Saint Patrick's Cathedral (0,6 km), algunas de las principales atracciones de Dublín.</p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Dublin">
                            <input type="hidden" name="compania" value="Handels Hotel"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 53€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>

                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-oslo.jpg" class="imagen"></a>
                        <h2>Hotel Citybox Oslo</h2>
                        <p class="descripcion"> Este hotel económico se encuentra a 250 metros de la estación central de Oslo Ofrece habitaciones luminosas con conexión Wi-Fi gratuita La calle comercial Karl Johans está a solo 150 metros. </p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Oslo">
                            <input type="hidden" name="compania" value="Hotel Citybox Oslo"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 49€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>

                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel_sidney.jpg" class="imagen"></a>
                        <h2>Great Southern Hotel</h2>
                        <p class="descripcion"> Está muy cerca de la estación central y del teatro Capitol, a poca distancia del ayuntamiento, el centro de convenciones y exposiciones de Sídney, el puerto de Darling y el edificio Queen Victoria. </p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Sidney">
                            <input type="hidden" name="compania" value="Great Southern Hotel"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 58€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>

                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-niza.jpg" class="imagen"></a>
                        <h2>Hotel Saint Gothard</h2>
                        <p class="descripcion"> El hotel está a solo 800 metros del famoso paseo de los Ingleses y de la playa. Además, encontrará aparcamiento público en las inmediaciones del establecimiento, que se encuentra a solo 650 metros de la estación de tren de Niza.  </p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Niza">
                            <input type="hidden" name="compania" value="Hotel Saint Gothard"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 100€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>

                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-estocolmo.jpg" class="imagen"></a>
                        <h2>First Hotel Kungsbron</h2>
                        <p class="descripcion"> Este hotel de diseño ofrece una buena relación calidad precio, se encuentra frente a la estación central de Estocolmo y del casino de Estocolmo. Las habitaciones incluyen TV de pantalla plana y hay WiFi gratuita. </p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Estocolmo">
                            <input type="hidden" name="compania" value="First Hotel Kungsbron"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 82€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>

                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-helsinki.jpg" class="imagen"></a>
                        <h2>Inn Tourist Hostel</h2>
                        <p class="descripcion"> El hotel se encuentra en Helsinki, a 1,9 km de la catedral de Helsinki, y ofrece vistas a la ciudad. Además, está a unos 2,7 km del centro de música de Helsinki y a 2,8 km de la estación de autobuses de Helsinki. </p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Helsinki">
                            <input type="hidden" name="compania" value="Inn Tourist Hostel"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 69€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>

                    <li class="hoteles">
                        
                        <a href="#"><img src="img/hotel-copenhague.jpg" class="imagen"></a>
                        <h2>Copenhagen Go Hotel</h2>
                        <p class="descripcion"> Si te alojas en Copenhagen Go Hotel, en Kastrup, estarás cerca del aeropuerto y a poca distancia de Centro comercial Fields y Iglesia de Nuestro Salvador. Este hotel sostenible se encuentra cerca de Bella Center y de Royal Arena. </p>
                        <form action="conexiones/reservaHotel.php" method="POST">
                        <input type="hidden" name="destino" value="Copenhagen">
                            <input type="hidden" name="compania" value="Copenhagen Go Hotel"/>  
                            <label class="datosreserva"> Fecha de entrada</label>
                            <input id="fecha_ini" type="date" class="select-date" name="fecha_ini">
                            <label class="datosreserva"> Fecha de salida</label>
                            <input id="fecha_fin" type="date" class="select-date" name="fecha_fin">

                            <label class="datosreserva"> Habitación</label>
                            <select id="tipo_reserva" class="custom-select" name="tipo_reserva">
                                <option value="0">habitación doble</option>
                                <option value="1">habitación triple</option>
                            </select>
                            <h4> Desde 67€</h4>
                            <a href="#"><button type="submit" class="btnHotel">Reservar</button></a>
                        </form>
                    </li>
                    
                </ul>
    
            </section>

        </main>

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
            <section class="redes-sociales">
                <h2>Redes sociales</h2>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Youtube</a></li>
                </ul>
            </section>
            
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/scripts.js" language="javascript" type="text/javascript"></script>

    </body>

</html>