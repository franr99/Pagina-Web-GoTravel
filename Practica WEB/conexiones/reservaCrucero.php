

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
        $compania = $_POST['compania'];
        $origen = $_POST['origen'];
        $idCrucero = $_POST['idCrucero'];
        $fecha_ini = $_POST['fecha_ini'];
        $fecha_fin = $_POST['fecha_fin'];
        $tipo_reserva = $_POST['tipo_reserva'];
        

        $arrayHabitacion = array("habitación doble","habitación triple","habitación familiar");

        $habCrucero = $_POST['habCrucero'];
        $comCrucero = $_POST['comCrucero'];

        if($_POST['funcion']){
            session_start();
            $id = $_SESSION['id'];

            if($id != null || !$id == ''){
            $qryLogin = "INSERT INTO Reserva (compania, tipo_reserva, origen, destino, fecha_ini, fecha_fin, id_usuario) VALUES ('$comCrucero' , ' $habCrucero ', '$origen' , ' $idCrucero ', '$fecha_ini' , '$fecha_fin' , '$id')";
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
            
                <form action="reservaCrucero.php" method="POST">
                <h4 class="origen"> Origen </h4>
                <input type="hidden" name="funcion" value="1">
                <input type="name" name="origen" class="form" value="<?php echo $origen ?>" readonly="readonly">
                <input type="hidden" name="comCrucero" value="<?php echo $compania ?>">
                <h4> Destino </h4>
				<input type="name" name="idCrucero" class="form" value="<?php echo $idCrucero ?>" readonly="readonly">
                <h4> Fecha salida </h4>
                <input type="date" name="fecha_ini" class="form" value="<?php echo $fecha_ini ?>" readonly="readonly">
                <h4> Fecha regreso </h4>
                <input type="date" name="fecha_fin" class="form" value="<?php echo $fecha_fin ?>" readonly="readonly">
                <h4> Tipo de reserva </h4>
                <input type="name" name="habCrucero" class="form" value="<?php echo $arrayHabitacion[$tipo_reserva]?>" readonly="readonly">
                <input type="submit" class="btnLogin" value="Reservar">
                </form>
        </section>

    </body>

</html>