

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
        $destino = $_POST['destino'];
        $compania = $_POST['compania'];
        $fecha_ini = $_POST['fecha_ini'];
        $fecha_fin = $_POST['fecha_fin'];
        $tipo_reserva = $_POST['tipo_reserva'];
        $origen = "null";

        $arrayHabitacion = array("habitación doble","habitación triple");

        $comHotel = $_POST['comHotel'];
        $habHotel = $_POST['habHotel'];

        if($_POST['funcion']){
            session_start();
            $id = $_SESSION['id'];
            if($id != null || !$id == ''){

            $qryLogin = "INSERT INTO Reserva (compania, tipo_reserva, origen, destino, fecha_ini, fecha_fin, id_usuario) VALUES ('$comHotel' , ' $habHotel ', '$origen' , ' $destino ', '$fecha_ini' , '$fecha_fin' , '$id')";
            $rscLogin = mysqli_query($link, $qryLogin);
            Header( "Location: http://localhost/Practica%20WEB/index.php");
            }
            else{
                $_SESSION['loginReserva'] = '1';
                Header( "Location: http://localhost/Practica%20WEB/login.php");
            }
        }
    ?>

        <section class="contenedor">
            <h2> Confirmar tu reserva</h2>
                <form action="reservaHotel.php" method="POST">
                <h4 class="origen"> Hotel </h4>
                <input type="hidden" name="destino" value="Berlin">
                <input type="hidden" name="funcion" value="1">
				<input type="name" name="comHotel" class="form" value="<?php echo $compania ?>" readonly="readonly">
                <h4> Fecha entrada </h4>
                <input type="date" name="fecha_ini" class="form" value="<?php echo $fecha_ini ?>" readonly="readonly">
                <h4> Fecha salida </h4>
                <input type="date" name="fecha_fin" class="form" value="<?php echo $fecha_fin ?>" readonly="readonly">
                <h4> Habitación </h4>
                <input type="name" name="habHotel" class="form" value="<?php echo $arrayHabitacion[$tipo_reserva] ?>" readonly="readonly">
                <input type="submit" class="btnLogin" value="Reservar">
                </form>
        </section>

    </body>

</html>
