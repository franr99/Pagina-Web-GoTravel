<?php
include('conexion.php');
$link = conectar();

    session_start();
    error_reporting(0);

    $id = $_SESSION['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $contrasena = $_POST['contra'];

    $qryUpdate = "UPDATE Cliente set nombre= '$nombre' , direccion= '$direccion' , email= '$email' , contrasena= '$contrasena' where id = '$id'";
    $rscUpdate = mysqli_query($link, $qryUpdate);
    if($rscUpdate){
        Header( "Location: http://localhost/Practica%20WEB/perfil.php");
    }else{
?>
            <script> alert("Error al modificar el usuario"); </script>
<?php
        }
?>