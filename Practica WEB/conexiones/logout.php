<?php
session_start();
if(session_destroy()){
    Header( "Location: http://localhost/Practica%20WEB/index.php");
}else{
    ?>
    <script> alert("Error al cerrar sesion"); </script>

<?php

}

?>





