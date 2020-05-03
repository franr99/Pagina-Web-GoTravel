<?php

$server = "remotemysql.com";
$user = "TYPr5pcNsn";
$pass = "SdH5mbwTbf";
$database = "TYPr5pcNsn";

$link = mysqli_connect ($server, $user, $pass, $database)
	or die("Imposible conectar con $server");

if ($link)
   print ("Conexi&oacute;n Realizada con &eacute;xito"); 

    $nombre = $_POST['nombre'];
    $dir = $_POST['direccion'];
    $email = $_POST['email'];
    $contra = $_POST['contra'];

    $qryLogin = "INSERT INTO Cliente (nombre, direccion, email, contrasena) VALUES ('$nombre' , '$dir' , '$email' , '$contra')";
    $rscLogin = mysqli_query($link, $qryLogin);

    session_start();
    $_SESSION['registro'] = '1'; 
    Header( "Location: http://localhost/Practica%20WEB/login.php");

    mysqli_close($link);

