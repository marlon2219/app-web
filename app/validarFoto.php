<?php
session_start();
$mensaje = null;
    if(!isset($_SESSION['id'])){
        header('Location : index.php');
    }else{


        $nombre = $_POST['nombreFoto'];
        $descripcion = $_POST['descripcionFoto'];
        $idUsuario = $_SESSION['id'];



       
        $name = $_FILES['imagen']['name'];
        $tmp_name = $_FILES['imagen']['tmp_name'];
        $error = $_FILES['imagen']['error'];
        $size = $_FILES['imagen']["size"];
        $max_size = 2000 * 2000;
        $type = $_FILES['imagen']['type'];
        //$nombre2 = $_REQUEST['nombreFoto'];

        if($error){
            $mensaje = "Error al tratar de insertar la foto";
        } else if($size > $max_size){
            $mensaje = "Imagen demasiado grande";
        }else if($type === null){
            $mensaje = "error en el typo";
        }else{
            $ruta = "imagenes/".$name;
            move_uploaded_file($tmp_name,$ruta);
            
        $conexion = mysqli_connect("localhost","root","","paginaweb");
        mysqli_query($conexion, "INSERT INTO fotos(idUsuario,nombre,descripcion,foto) VALUES('$idUsuario',' $nombre',' $descripcion','$ruta')");
        mysqli_close($conexion);
        echo '<script>alert("Foto guardada correctamente");
            window.location.replace("misfotos.php");</script>';
        
        }

       




    }
    

?>

