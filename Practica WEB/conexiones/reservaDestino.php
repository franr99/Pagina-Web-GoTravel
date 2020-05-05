<?php

include('conexion.php');
$link = conectar();

    $idDestino = $_POST['idDestino'];
    $origen = $_POST['origen'];
    $fecha_ini = $_POST['fecha_ini'];
    $fecha_fin = $_POST['fecha_fin'];
    $compania = $_POST['compania'];
    $tipo_compania = "null";

    $arraySalida = array("Madrid","Barcelona","Sevilla","Valencia","Cadiz","Bilbao");
    $arrayCompania = array("Ryanair","Vueling","Iberia","Air Europa");

    $ciudadOrigen = $arraySalida[$origen];
    $comViaje = $arrayCompania[$compania];

    if($_GET['funcion']){
        //reservar($link);
        $qryLogin = "INSERT INTO Reserva (compania, tipo_reserva, origen, destino, fecha_ini, fecha_fin) VALUES ('$comViaje' , ' $tipo_compania ', '$ciudadOrigen' , ' $idDestino ', '$fecha_ini' , '$fecha_fin')";
        $rscLogin = mysqli_query($link, $qryLogin);

        Header( "Location: http://localhost/Practica%20WEB/index.php");

    }

?>

<!DOCTYPE html>

<html lang = "es">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <link rel=stylesheet type="text/css" href="../css/registrar.css">
        <title> Registrar</title>
    </head>
    <body>
        <section class="contenedor">
            <h2> Confirmar tu reserva</h2>
                <h4 class="origen"> Origen </h4>
				<input type="name" class="form" value="<?php echo $ciudadOrigen ?>" readonly="readonly">
                <h4> Destino </h4>
				<input type="name" class="form" value="<?php echo $idDestino ?>" readonly="readonly">
                <h4> Fecha salida </h4>
                <input type="date" class="form" value="<?php echo $fecha_ini ?>" readonly="readonly">
                <h4> Fecha regreso </h4>
                <input type="date" class="form" value="<?php echo $fecha_fin ?>" readonly="readonly">
                <h4> Compañia </h4>
                <input type="name" class="form" value="<?php echo $comViaje ?>" readonly="readonly">
                <!--<input type="submit" class="btnLogin" value="Reservar" onclick = "reservar();">-->
                <a href="reservaDestino.php?funcion=1" class=btnLogin> Reservar </a>
        </section>

    </body>

    <?php

        /*function reservar(&$link){
            $qryLogin = "INSERT INTO Reserva (compania, tipo_reserva, origen, destino, fecha_ini, fecha_fin) VALUES ('$comViaje' , ' $tipo_compania ', '$ciudadOrigen' , ' $idDestino ', '$fecha_ini' , '$fecha_fin')";
            $rscLogin = mysqli_query($link, $qryLogin);

            Header( "Location: http://localhost/Practica%20WEB/index.php");

        }*/


    ?>

</html>
