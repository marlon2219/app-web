<?php

include ("conexion2.php");
    $usuarioN = $_POST['usuarionuevo'];
    $correoN = $_POST['correonuevo'];
    $contraN = $_POST['contranueva'];

    $sql= $conexion->prepare("INSERT INTO usuario(usuario,correo,password) VALUES(?,?,?)");
    $sql->execute([$usuarioN,$correoN,$contraN]);
    

    if($sql === false){
        echo '<script language="javascript">alert("error insertando datos");</script>';
        header('Location: formulario.php');
    }else if($sql === true){
        echo '<script language="javascript">alert("REGISTRADO CON EXITO");</script>';
        header('Location:index.php');
    }




?>