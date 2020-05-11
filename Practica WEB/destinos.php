<!DOCTYPE html>

<html lang = "es">

    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title> Destinos </title>
        <link rel=stylesheet type="text/css" href="css/destinos.css">
        <link rel=stylesheet type="text/css" href="css/navegador.css">
        <link rel=stylesheet type="text/css" href="css/reset.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="../js/MostrarDatos.js" language="javascript" type="text/javascript"></script>
    </head>
    <body>
    <main class="main">
    <?php
            error_reporting(0);
            session_start();
            $varnombre = $_SESSION['nombre'];
            
            
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
        <img src="img/playa_des3.jpg" class="fondoMenu" alt="">
        <section class="seccionOfertas"> 
            <h1> Destinos</h1>
            <ul class="listaOfertas">
               
                <li class="ofertas">
     
                    <img src="img/berlin_des2.jpg" class="imagen">
                    <h2>Berlin</h2>
                    <p class="descripcion">La ciudad es conocida por su ambiente artístico y los sitios geográficos modernos, como la Filarmónica de Berlín, el Monumento del Holocausto y los restos del Muro de Berlín.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Berlin"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                            <option value="3">Valencia</option>
                            <option value="4">Cadiz</option>
                            <option value="5">Bilbao</option>
                            
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 55€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>

                </li>
                <li class="ofertas">
                    
                    <a href="#"><img src="img/londres_des.jpg" class="imagen"></a>
                    <h2>Londres</h2>
                    <p class="descripcion"> En su centro se alzan el imponente Palacio del Parlamento, la torre del icónico reloj "Big Ben" y la Abadía de Westminster, lugar de las coronaciones monárquicas británicas.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                    <input type="hidden" name="idDestino" value="Londres"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                            <option value="3">Valencia</option>
                            <option value="4">Cadiz</option>
                            <option value="5">Bilbao</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 45€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/paris.jpg" class="imagen"></a>
                    <h2>Paris</h2>
                    <p class="descripcion"> Su paisaje urbano del siglo XIX está entrecruzado por amplios bulevares y el río Sena. Destacan la Torre Eiffel y la catedral gótica de Notre Dame del siglo XII.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Paris"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="3">Valencia</option>
                            <option value="5">Bilbao</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4 id="idPrecio">Por tan solo 65€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/tokyo_des.jpg" class="imagen"></a>
                    <h2>Tokyo</h2>
                    <p class="descripcion"> Mezcla lo ultramoderno y lo tradicional, desde los rascacielos iluminados con neones hasta los templos históricos. Destacan el santuario Shinto Meiji y el Palacio Imperial.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Tokyo"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>

                        </select>
                        <h4> Por tan solo 450€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/ibiza_des.jpg" class="imagen"></a>
                    <h2>Ibiza</h2>
                    <p class="descripcion"> Es conocida por su animada vida nocturna; muchas discotecas europeas tienen sucursales aquí. Destacan al sur del centro, sus playas Ses Figueretes y Platja d'en Bossa. </p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Ibiza"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                            <option value="3">Valencia</option>
                            <option value="4">Cadiz</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 45€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/new_york_des.jpg" class="imagen"></a>
                    <h2>New York</h2>
                    <p class="descripcion">En su centro se encuentra Manhattan, un distrito densamente poblado que se encuentra entre los principales centros comerciales, financieros y culturales del mundo.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="New York"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>

                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>

                        </select>
                        <h4>Por tan solo 350€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/cracovia_des.jpg" class="imagen"></a>
                    <h2>Cracovia</h2>
                    <p class="descripcion">Conocida por su centro medieval bien conservado y su barrio judío. Su ciudad antigua, rodeada por el parque Planty y los restos de las murallas medievales de la ciudad.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Cracovia"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                            <option value="3">Valencia</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="1">Vueling</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 50€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/lisboa.jpeg" class="imagen"></a>
                    <h2>Lisboa</h2>
                    <p class="descripcion">Desde el imponente castillo de San Jorge, la vista abarca los edificios de colores pastel en la ciudad antigua, el estuario del Tajo y el puente colgante 25 de Abril.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Lisboa"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="3">Valencia</option>
                            <option value="4">Cadiz</option>

                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 45€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/madrid_des.jpg" class="imagen"></a>
                    <h2>Madrid</h2>
                    <p class="descripcion">Es famosa por sus ricas colecciones de arte europeo, con obras de Goya, Velázquez y otros maestros españoles en el Museo del Prado. Destacan la Plaza Mayor o el Palacio Real.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Madrid"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                            <option value="3">Valencia</option>
                            <option value="4">Cadiz</option>
                            <option value="5">Bilbao</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 45€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/barcelona_des.jpg" class="imagen"></a>
                    <h2>Barcelona</h2>
                    <p class="descripcion">Es conocida por su arte y arquitectura. La fantástica iglesia de la Sagrada Familia y otros hitos modernistas diseñados por Antoni Gaudí adornan la ciudad.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Barcelona"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="2">Sevilla</option>
                            <option value="3">Valencia</option>
                            <option value="4">Cadiz</option>
                            <option value="5">Bilbao</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 45€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/roma_des.jpg" class="imagen"></a>
                    <h2>Roma</h2>
                    <p class="descripcion">Es una extensa ciudad cosmopolita que tiene a la vista casi 3,000 años de arte, arquitectura y cultura de influencia mundial. Destacan Las ruinas antiguas como las del Foro y el Coliseo Romano.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Roma"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                            <option value="3">Valencia</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 55€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/napoles_des.jpg" class="imagen"></a>
                    <h2>Napoles</h2>
                    <p class="descripcion"> Es una ciudad del sur de Italia que se ubica en el golfo de Nápoles. Data del segundo milenio a. C. y tiene siglos de arte y arquitectura importantes como la catedral Duomo di San Gennaro.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Napoles"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                            <option value="3">Valencia</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 55€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/atenas_des.jpg" class="imagen"></a>
                    <h2>Atenas</h2>
                    <p class="descripcion"> Capital de Grecia, en la ciudad aún predominan los sitios geográficos del siglo V a. C., incluida la Acrópolis, una ciudadela sobre un monte con antiguos edificios, como el templo del Partenón.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Atenas"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="3">Valencia</option>

                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 105€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/dublin_des.jpg" class="imagen"></a>
                    <h2>Dublín</h2>
                    <p class="descripcion"> Se encuentra en la costa este de Irlanda en la desembocadura del río Liffey. Sus edificios históricos incluyen el Castillo de Dublín, que data del siglo XIII, y la Catedral de San Patricio.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Dublin"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                            <option value="3">Valencia</option>
                            <option value="5">Bilbao</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="1">Vueling</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 55€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/oslo_des.jpg" class="imagen"></a>
                    <h2>Oslo</h2>
                    <p class="descripcion"> Famosa por sus áreas verdes y museos. Muchos de estos se encuentran en la Península de Bygdøy, incluido el Museo Marítimo Noruego y el Museo de barcos vikingos de Oslo.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="OSLO"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                            <option value="5">Bilbao</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 125€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/copenhague_des.jpg" class="imagen"></a>
                    <h2>Copenhague</h2>
                    <p class="descripcion"> Capital de Dinamarca, el centro histórico de la ciudad alberga el palacio de Amalienborg de la familia real, el palacio de Christiansborg y el castillo de Rosenborg de la época renacentista.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Copenhague"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="3">Valencia</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="0">Ryanair</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 225€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/helsinki_des.jpg" class="imagen"></a>
                    <h2>Helsinki</h2>
                    <p class="descripcion"> Se ubica en una península del golfo de Finlandia. Está bordeada de instituciones como el Museo Nacional, que recorre la historia de Finlandia desde la Edad de Piedra hasta la actualidad.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Helsinki"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 250€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/estocolmo_des.jpg" class="imagen"></a>
                    <h2>Estocolmo</h2>
                    <p class="descripcion"> Capital de Suecia, abarca 14 islas y más de 50 puentes en un extenso archipiélago del mar Báltico. Destaca por sus calles de adoquines y los edificios color ocre de Gamla Stan.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Estocolmo"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="5">Bilbao</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 270€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/niza_des.jpg" class="imagen"></a>
                    <h2>Niza</h2>
                    <p class="descripcion"> La ciudad, situada en Francia, fue fundada por los griegos y más tarde un lugar de retiro para la elite europea del siglo XIX. Destaca por sus playas y su arte y cultura como el museo Mattise.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Niza"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                            <option value="2">Sevilla</option>
                            <option value="3">Valencia</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                            <option value="3">Air Europa</option>
                        </select>
                        <h4>Por tan solo 90€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
                    </form>
                    
                </li>

                <li class="ofertas">
                    
                    <a href="#"><img src="img/sydney_des.jpg" class="imagen"></a>
                    <h2>Sydney</h2>
                    <p class="descripcion"> Sídney, capital de Nueva Gales del Sur y una de las ciudades más grandes de Australia, es famosa por su Casa de la Ópera de Sídney junto al puerto, con un característico diseño con forma de velas.</p>
                    <form action="conexiones/reservaDestino.php" method="POST">
                        <input type="hidden" name="idDestino" value="Sydney"/>
                        <label class="datosreserva"> Origen</label>
                        <select id="origen" class="custom-select" name="origen">
                            <option value="0">Madrid</option>
                            <option value="1">Barcelona</option>
                        </select>

                        <label class="datosreserva"> Fecha de salida</label>
                        <input id="fecha_ini" type="date" class="select-date" name="fecha_ini"/>
                        <label class="datosreserva"> Fecha de regreso</label>
                        <input id="fecha_fin" type="date" class="select-date" name="fecha_fin"/>

                        <label class="datosreserva"> Compañia de vuelo</label>
                        <select id="compañia" class="custom-select" name="compania">
                            <option value="1">Vueling</option>
                            <option value="2">Iberia</option>
                        </select>
                        <h4>Por tan solo 500€</h4>
                        <input type="submit" class="btnOferta" value="Reservar">
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
    </body>
</html>