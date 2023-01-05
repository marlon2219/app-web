<?php

        session_start();
        include ("conexion2.php");
        $usuario = $_POST['txtusuario'];
        $pass = $_POST["txtpassword"];

        

        $sql = $conexion->prepare('SELECT * FROM  usuario WHERE usuario = ? and password = ? ');
         $sql->execute([$usuario,$pass]);
         $datos = $sql->fetch(PDO::FETCH_OBJ);

        

        if($datos === false){
            
           header('Location: index.php');
        }else if($sql->rowCount() == 1){
            $_SESSION['nombre'] = $datos->usuario;
            $_SESSION['correo'] = $datos->correo;
            $_SESSION['id']= $datos->idUsuario;
            header('Location:vistaUsuario.php');
        }
           
        

    

    




?>

