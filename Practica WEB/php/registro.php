<?php

   include('conexion.php');
   $link = conectar();

   $nombre = $_POST['nombre'];
   $dir = $_POST['direccion'];
   $email = $_POST['email'];
   $contra = $_POST['contra'];

   $qryLogin = "INSERT INTO Cliente (nombre, direccion, email, contrasena) VALUES ('$nombre' , '$dir' , '$email' , '$contra')";
   $rscLogin = mysqli_query($link, $qryLogin);

   session_destroy();
   session_start();
   $_SESSION['registro'] = '1'; 
   Header( "Location: http://localhost/Practica%20WEB/login.php");

?>

