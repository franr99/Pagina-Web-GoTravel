<?php

include('conexion.php');
$link = conectar();

    $idDestino = $_POST['idDestino'];
    $origen = $_POST['origen'];
    $fecha_ini = $_POST['fecha_ini'];
    $fecha_fin = $_POST['fecha_fin'];
    $compania = $_POST['compania'];

    $arraySalida = array("Madrid","Barcelona","Sevilla","Valencia","Cadiz","Bilbao");
    $arrayCompania = array("Ryanair","Vueling","Iberia","Air Europa");

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
            <img src="../img/logo-bueno.png" class="logo">
                <h4> Origen </h4>
				<input type="name" class="form" value="<?php echo $idDestino ?>" readonly="readonly">
                <h4> Destino </h4>
				<input type="name" class="form" value="<?php echo $arraySalida[$origen] ?>" readonly="readonly">
                <h4> Fecha salida </h4>
                <input type="date" class="form" value="<?php echo $fecha_ini ?>" readonly="readonly">
                <h4> Fecha regreso </h4>
                <input type="date" class="form" value="<?php echo $fecha_fin ?>" readonly="readonly">
                <h4> Compañia </h4>
                <input type="name" class="form" value="<?php echo $arrayCompania[$compania] ?>" readonly="readonly">
                <input type="submit" class="btnLogin" value="Reservar" onclick = "reservar();">
        </section>

    </body>

    <?php
        function reservar(){


        }


    ?>

</html>
