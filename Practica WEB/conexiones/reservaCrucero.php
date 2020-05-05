

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

        $idCrucero = $_POST['idCrucero'];
        $fecha_ini = $_POST['fecha_ini'];
        $fecha_fin = $_POST['fecha_fin'];
        $tipo_reserva = $_POST['tipo_reserva'];

        $arrayHabitacion = array("habitación doble","habitación triple","habitación familiar");

        $habCrucero = $_POST['habCrucero'];

        if($_POST['funcion']){
            session_start();
            $id = $_SESSION['id'];
            if($id != null || !$id == ''){

            $qryLogin = "INSERT INTO Reserva (compania, tipo_reserva, origen, destino, fecha_ini, fecha_fin, id_usuario) VALUES ('null' , ' $habCrucero ', 'null' , ' $idCrucero ', '$fecha_ini' , '$fecha_fin' , '$id')";
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
                <h4 class="origen"> Origen </h4>
                <form action="reservaCrucero.php" method="POST">
                <input type="hidden" name="funcion" value="1">
                <h4> Lugar </h4>
				<input type="name" name="idCrucero" class="form" value="<?php echo $idCrucero ?>" readonly="readonly">
                <h4> Fecha salida </h4>
                <input type="date" name="fecha_ini" class="form" value="<?php echo $fecha_ini ?>" readonly="readonly">
                <h4> Fecha regreso </h4>
                <input type="date" name="fecha_fin" class="form" value="<?php echo $fecha_fin ?>" readonly="readonly">
                <h4> Compañia </h4>
                <input type="name" name="habCrucero" class="form" value="<?php echo $arrayCompania[$tipo_reserva] ?>" readonly="readonly">
                <input type="submit" class="btnLogin" value="Reservar">
                </form>
        </section>

    </body>

</html>