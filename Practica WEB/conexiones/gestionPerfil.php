<?php

    include('conexion.php');
    $link = conectar();

    session_start();
    error_reporting(0);
    $id = $_SESSION['id'];
    $modificar = $_POST['modificar'];
    $borrar = $_POST['borrar'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $contrasena = $_POST['contra'];
    echo $nombre;

    $qryUpdate = "UPDATE Cliente set nombre= '$nombre' , direccion= '$direccion' , email= '$email' , contrasena= '$contrasena' where id = '$id'";
    $rscUpdate = mysqli_query($link, $qryUpdate);
    if($rscUpdate){
        Header( "Location: http://localhost/Practica%20WEB/perfil.php");
    }else{
?>
        <script> alert("Error al modificar el usuario"); </script>
<?php
    }
    if($_POST['eliminar']){

        $qryDelete = "DELELTE FROM Cliente where id = '$id'";
        $rscDelete = mysqli_query($link, $qryDelete);
        if($rscUpdate){
            session_destroy();
            Header( "Location: http://localhost/Practica%20WEB/index.php");
        }else{
?>
            <script> alert("Error al eliminar el usuario"); </script>
<?php
        }
    }
    
?>