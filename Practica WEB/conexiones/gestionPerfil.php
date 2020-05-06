<?php

    include('conexion.php');
    $link = conectar();

    session_start();
    $modificar = $_POST['modificar'];
    $borrar = $_POST['borrar'];

    $qryLogin = sprintf("UPDATE CLIENTE SET Cliente WHERE email = '" .$usuario. "' and contrasena = '" .$contra. "'");
    $rscLogin = mysqli_query($link, $qryLogin);

?>