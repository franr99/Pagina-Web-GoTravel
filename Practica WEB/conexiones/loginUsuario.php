<?php

    include('conexion.php');
    $link = conectar();

    $usuario = $_POST['email'];
    $contra = $_POST['contra'];

    $qryLogin = sprintf("SELECT * FROM Cliente WHERE email = '" .$usuario. "' and contrasena = '" .$contra. "'");
    $rscLogin = mysqli_query($link, $qryLogin);

    $filas = mysqli_num_rows($rscLogin);
    $redireccionar = false;
    if($filas >0){
        $redireccionar = true;
           
    }
        
    if($redireccionar){
        session_start();
        $_SESSION['usuario'] = $usuario;
        $fila = $rscLogin->fetch_row();
        $nombre = $fila[1];
        $id = $fila[0];
        $_SESSION['id'] = $id;
 	    $_SESSION['nombre'] = $nombre;
        Header( "Location: http://localhost/Practica%20WEB/index.php");
    }else{
        session_start();
        $_SESSION['login'] = '1'; 
        Header( "Location: http://localhost/Practica%20WEB/login.php");
    }
        
        mysqli_free_result($rscLogin);
        mysqli_close($link);