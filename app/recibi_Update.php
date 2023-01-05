<?php

    $idFoto = $_REQUEST['id'];
    $nombre = $_REQUEST['nombreFoto'];
    $des = $_REQUEST['descripcionFoto'];

    $update = ("UPDATE  fotos SET nombre ='$nombre',
                                    descripcion ='$des'
                                    WHERE idFoto = '$idFoto'  ");
    $conexion2 = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion2,"paginaweb");
    $resultado= mysqli_query($conexion2, $update);

    echo "<script type='text/javascript'>
    window.location= 'misfotos.php';
    </script>";

?>