<?php

function conectar(){

$server = "remotemysql.com";
$user = "TYPr5pcNsn";
$pass = "SdH5mbwTbf";
$database = "TYPr5pcNsn";

$link = mysqli_connect ($server, $user, $pass, $database)
	or die("Imposible conectar con $server");

if ($link)
   print ("Conexi&oacute;n Realizada con &eacute;xito"); 

   return $link;
}

?>