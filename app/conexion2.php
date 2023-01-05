<?php

$bdDatos = "paginaweb";
$usuario = "root";
$contrasena = "admin";
// Create connection
try{
    $conexion = new PDO('mysql:host=localhost; dbname='.$bdDatos,$usuario,$contrasena);
    
   
} catch(Exception $e){
    echo "Error de conexin" . $e->getMessage();
}


?>