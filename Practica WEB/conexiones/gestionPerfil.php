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
        echo "funciona";
    }else{
        echo "fail";
    }
    
    //Header( "Location: http://localhost/Practica%20WEB/perfil.php");


?>