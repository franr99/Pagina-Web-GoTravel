<?php

$server = "remotemysql.com";
$user = "TYPr5pcNsn";
$pass = "SdH5mbwTbf";
$database = "TYPr5pcNsn";

$link = mysqli_connect ($server, $user, $pass, $database)
	or die("Imposible conectar con $server");

if ($link)
   print ("Conexi&oacute;n Realizada con &eacute;xito"); 

/*$bd = mysqli_select_db($database, $link) 
  or die("Imposible abrir BBDD $database <br/>".mysqli_error());

if ($bd)
   print ("<br> Seleccionada BD $database correctamente"); */

   //function login(){
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
            Header( "Location: http://localhost/Practica%20WEB/index.php");
        }else{
            session_start();
            $_SESSION['login'] = '1'; 
            Header( "Location: http://localhost/Practica%20WEB/login.php");
        }
        
        mysqli_free_result($rscLogin);
        mysqli_close($link);

   //}

?>