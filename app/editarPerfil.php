<?php
session_start();
    $ide = $_SESSION['id'];
   $usuario = $_POST['usu'];
   $correo = $_REQUEST['corr'];
   $contra = $_REQUEST['pass'];

   $update = ("UPDATE  usuario SET usuario ='$usuario',
                                   correo ='$correo',
                                   password ='$contra'
                                   WHERE idUsuario = '$ide'  ");
   $conexion2 = mysqli_connect("localhost","root","");
   mysqli_select_db($conexion2,"paginaweb");
   $resultado= mysqli_query($conexion2, $update);

   echo "<script type='text/javascript'>
   window.location= 'vistaUsuario.php';
   </script>";



?>