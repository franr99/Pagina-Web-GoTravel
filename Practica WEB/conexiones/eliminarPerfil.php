<?php
include('conexion.php');
$link = conectar();

    session_start();
    error_reporting(0);
    $id = $_SESSION['id'];
    echo $id;
    $qryDelete = "DELETE FROM Cliente where id = '$id'";
    $rscDelete = mysqli_query($link, $qryDelete);
    if($rscDelete){
        session_destroy();
        Header( "Location: http://localhost/Practica%20WEB/index.php");
    }else{
?>
        <script> alert("Error al eliminar el usuario"); </script>
<?php
    }
?>