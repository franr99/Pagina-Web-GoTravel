<!DOCTYPE html>

<html lang = "es">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <link rel=stylesheet type="text/css" href="../css/registrar.css">
        <title> Modificar reserva</title>
    </head>
    <body>

    <?php
    error_reporting(0);
    $modificar = $_POST['id_reserva'];
    $compania = $_POST['compania'];
    $tipo_reserva = $_POST['tipo_reserva'];
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha_ini = $_POST['fecha_ini'];
    $fecha_fin = $_POST['fecha_fin'];

?>
    
    <section class="contenedor">
            <h2> Modificar Reserva</h2>
            <form action="gestionReserva.php" method="POST">
                <input type="hidden" name="modificar" value="1">
                <input type="hidden" name="id_reserva" value="<?php echo $modificar ?>">
				<input type="name" name="compania" class="form" value="<?php echo $compania ?>" readonly="readonly">
                <input type="name" name="tipo_reserva" class="form" value="<?php echo $tipo_reserva ?>" readonly="readonly">
				<input type="name" name="origen" class="form" value="<?php echo $origen ?>" readonly="readonly">
                <input type="name" name="destino" class="form" value="<?php echo $destino ?>" readonly="readonly">
                <input type="date" name="fecha_ini" class="form" value=""> 
                <input type="date" name="fecha_fin" class="form" value="">
                <input type="submit" class="btnLogin" value="Reservar">
                </form>
        </section>
    </body>

</html>