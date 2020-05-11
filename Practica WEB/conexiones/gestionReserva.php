
<?php
    include('conexion.php');
    $link = conectar();
    error_reporting(0);
    $eliminar = $_POST['eliminar'];
    $modificar = $_POST['modificar'];
    if($_POST['eliminar']){

        $qryDelete = "DELETE FROM Reserva where id_reserva = '$eliminar'";
        $rscDelete = mysqli_query($link, $qryDelete);
        if($rscDelete){
            $eliminar = null;
            Header( "Location: http://localhost/Practica%20WEB/perfil.php");
        }
    }else if($_POST['modificar']){

        $id_reserva = $_POST['id_reserva'];
        $compania = $_POST['compania'];
        $tipo_reserva = $_POST['tipo_reserva'];
        $origen = $_POST['origen'];
        $destino = $_POST['destino'];
        $fecha_ini = $_POST['fecha_ini'];
        $fecha_fin = $_POST['fecha_fin'];

        $qryUpdate = "UPDATE Reserva set compania= '$compania' , tipo_reserva= '$tipo_reserva' , origen= '$origen' , destino= '$destino' , fecha_ini ='$fecha_ini' , fecha_fin='$fecha_fin' where id_reserva = '$id_reserva'";
        $rscUpdate = mysqli_query($link, $qryUpdate);

        if($rscUpdate){
            Header( "Location: http://localhost/Practica%20WEB/perfil.php");
        }else{
    ?>
            <script> alert("Error al modificar el usuario"); </script>
    <?php
        }
    }
?>
