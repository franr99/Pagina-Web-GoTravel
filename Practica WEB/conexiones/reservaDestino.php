

<!DOCTYPE html>

<html lang = "es">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <link rel=stylesheet type="text/css" href="../css/registrar.css">
        <title> Registrar</title>
    </head>
    <body>

    <?php

    include('conexion.php');
    $link = conectar();

        error_reporting(0);
        $idDestino = $_POST['idDestino'];
        $origen = $_POST['origen'];
        $fecha_ini = $_POST['fecha_ini'];
        $fecha_fin = $_POST['fecha_fin'];
        $compania = $_POST['compania'];
        $tipo_compania = "vuelo";

        $arraySalida = array("Madrid","Barcelona","Sevilla","Valencia","Cadiz","Bilbao");
        $arrayCompania = array("Ryanair","Vueling","Iberia","Air Europa");

        $ciudadOrigen = $_POST['ciudadOrigen'];
        $comViaje = $_POST['comViaje'];

        if($_POST['funcion']){
            session_start();
            $id = $_SESSION['id'];
            if($id != null || !$id == ''){

            $qryReserva = "INSERT INTO Reserva (compania, tipo_reserva, origen, destino, fecha_ini, fecha_fin, id_usuario) VALUES ('$comViaje' , ' $tipo_compania ', '$ciudadOrigen' , ' $idDestino ', '$fecha_ini' , '$fecha_fin' , '$id')";
            $rscReserva = mysqli_query($link, $qryReserva);

            Header( "Location: http://localhost/Practica%20WEB/index.php");
            }
            else{
                $_SESSION['loginReserva'] = '1';
                Header( "Location: http://localhost/Practica%20WEB/login.php");
            }
        }
    ?>

        <section class="contenedor">
            
                <form action="reservaDestino.php" method="POST">
                <h4 class="origen"> Origen </h4>
                <input type="hidden" name="funcion" value="1">
				<input type="name" name="ciudadOrigen" class="form" value="<?php echo $arraySalida[$origen] ?>" readonly="readonly">
                <h4> Destino </h4>
				<input type="name" name="idDestino" class="form" value="<?php echo $idDestino ?>" readonly="readonly">
                <h4> Fecha salida </h4>
                <input type="date" name="fecha_ini" class="form" value="<?php echo $fecha_ini ?>" readonly="readonly">
                <h4> Fecha regreso </h4>
                <input type="date" name="fecha_fin" class="form" value="<?php echo $fecha_fin ?>" readonly="readonly">
                <h4> Compañia </h4>
                <input type="name" name="comViaje" class="form" value="<?php echo $arrayCompania[$compania] ?>" readonly="readonly">
                <input type="submit" class="btnLogin" value="Reservar">
                </form>
        </section>

    </body>

</html>
