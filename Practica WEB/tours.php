<!DOCTYPE html>

<html lang = "es">

    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title> Tours </title>
        <link rel=stylesheet type="text/css" href="css/estilos.css">
        <link rel=stylesheet type="text/css" href="css/tours.css">
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

            <section class = "portada">
                <img src="img/tours.jpg" class="fondoMenu" >
                <h1 class = "texto-img"> Tours </h1>  
 

                <article class = menu-img>
                    <h1> ¿Que te gustaría hacer? </h1>

                    <ul class="tours-iconos">
                        <li><a href="#1"><img src="img/icon-excur.png"></a></li>
                        <li><a href="#2"><img class ="img-cult" src="img/icon-cult.png"></a></li>
                        <li><a href="#3"><img src="img/icon-natur.png"></a></li>
                        <li><a href="#4"><img src="img/icon-arte.png"></a></li>
                        <li><a href="#5"><img src="img/icon-entretenimiento.png"></a></li>
                        <li><a href="#6"><img src="img/icon-gastronomia.png"></a></li>
                    </ul>
                    
                </article>

            </section>


            <section class = "excursion" id="1"> 
                <article class="titulo-excursion">
                    <img src ="img/icon-excur.png">
                    <h1> Excursiones </h1>
                </article>

                <article class="contenedor">
                    <ul class="contenido">
                        <li><a href="https://www.civitatis.com/es/bruselas/excursion-brujas"><img src="img/brujas-excur.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/paris/paseo-barco-sena"><img src="img/paris-excur.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/nueva-york/excursion-washington"><img src="img/washington-excur.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/madrid/excursion-toledo-segovia"><img src="img/fachada-catedral-segovia.jpg"></a></li>
                        <li><a href="https://www.civitatis.com/es/amsterdam/excursion-zaanse-schans-volendam-marken"><img src="img/paises-bajos-volendam.webp"></a></li>
                        
                    </ul>

                </article>
                                 
            </section>

            <section class = "historia" id="2"> 
                <article class="titulo-historia">
                    <img class ="img-cult" src ="img/icon-cult.png">
                    <h1> Historia y cultura </h1>
                </article>

                <article class="contenedor">
                    <ul class="contenido">
                        <li><a href="https://www.civitatis.com/es/roma/tour-coliseo-arena-gladiadores"><img src="img/roma-cult.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/el-cairo/piramides-giza-menfis-saqqara"><img src="img/cairo-cult.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/paris/entrada-sainte-chapelle"><img src="img/sainte-chapelle-cult.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/granada/visita-guiada-alhambra/"><img src="img/alhambra.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/bali/tour-cultural-bali-kintamani"><img src="img/danza-barong.webp"></a></li>
                        
                    </ul>

                </article>
                                 
            </section>

            <section class = "aventura"id="3"> 
                <article class="titulo-aventura">
                    <img src ="img/icon-natur.png">
                    <h1> Aventura y naturaleza</h1>
                </article>

                <article class="contenedor">
                    <ul class="contenido">
                        <li><a href="https://www.civitatis.com/es/stavanger/senderismo-preikestolen-amanecer"><img src="img/amanecer-fiordo-aven.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/lucerna/excursion-monte-rigi"><img src="img/monte-rigi-aven.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/baqueira/paseo-raquetas-nieve-baqueira-beret"><img src="img/raquetas-nieve-aven.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/san-gil/rafting-rio-fonce"><img src="img/rio-fonce.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/tenerife/tour-kayak-punta-teno"><img src="img/kayak.webp"></a></li>
                        
                    </ul>

                </article>
                                 
            </section>

            <section class = "excursion"id="4"> 
                <article class="titulo-excursion">
                    <img src ="img/icon-arte.png">
                    <h1> Arte y pintura</h1>
                </article>

                <article class="contenedor">
                    <ul class="contenido">
                        <li><a href="https://www.londres.es/museo-britanico"><img src="img/arte_londres.jpg"></a></li>
                        <li><a href="https://www.museodelprado.es/"><img src="img/arte_madrid.jpg"></a></li>
                        <li><a href="https://www.paris.es/museo-louvre"><img src="img/arte_paris.jpg"></a></li>
                        <li><a href="https://www.civitatis.com/es/la-habana/clase-pintura-galeria-arte"><img src="img/cuadro-jose-marti.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/florencia/visita-guiada-florencia-uffizi-academia"><img src="img/nacimiento-venus.webp"></a></li>
                        
                    </ul>

                </article>
                                 
            </section>

            <section class = "entretenimiento" id="5"> 
                <article class="titulo-entretenimiento">
                    <img src ="img/icon-entretenimiento.png">
                    <h1> Entretenimieto</h1>
                </article>

                <article class="contenedor">
                    <ul class="contenido">
                        <li><a href="https://www.elreyleon.es/"><img src="img/entretenimiento_madrid.jpg"></a></li>
                        <li><a href="https://es.uefa.com/uefaeuro-2020/"><img src="img/entretenimiento_euro.jpg"></a></li>
                        <li><a href="https://www.dakar.com/es"><img src="img/entretenimiento_paris.jpg"></a></li>
                        <li><a href="https://www.civitatis.com/es/los-angeles/entrada-universal-studios-hollywood"><img src="img/universal-studios.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/san-petersburgo/entradas-ballet-ruso"><img src="img/ballet-cisnes.webp"></a></li>
                        
                    </ul>

                </article>
                                 
            </section>

            <section class = "excursion" id="6"> 
                <article class="titulo-excursion">
                    <img src ="img/icon-gastronomia.png">
                    <h1> Gastronomía</h1>
                </article>

                <article class="contenedor">
                    <ul class="contenido">
                        <li><a href="https://www.culinaryspain.es/rutas-gastronomicas/rutas-gastronomicas-espana/barcelona-5-dias/"><img src="img/gastronomia_bar.jpg"></a></li>
                        <li><a href="https://www.culinaryspain.es/rutas-gastronomicas/rutas-gastronomicas-espana/madrid-gourmet-4-dias/"><img src="img/gastronomia_madrid.jpg"></a></li>
                        <li><a href="https://www.disfrutaberlin.com/actividades/tour-gastronomico-berlin"><img src="img/gastronomia_berlin.jpg"></a></li>
                        <li><a href="https://www.civitatis.com/es/roma/tour-gastronomico-barrio-trastevere"><img src="img/trastevere.webp"></a></li>
                        <li><a href="https://www.civitatis.com/es/tokio/tour-gastronomico-shibuya"><img src="img/sushi.webp"></a></li>
                        
                    </ul>

                </article>
                                 
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