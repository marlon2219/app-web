<?php



$idBorrar= $_REQUEST['id'];
$delete = ("DELETE FROM  fotos WHERE idFoto  ='$idBorrar' ");
$conexion2 = mysqli_connect("localhost","root","");
mysqli_select_db($conexion2,"paginaweb");
$resultado= mysqli_query($conexion2, $delete);

echo "<script type='text/javascript'>
window.location= 'misfotos.php';
</script>";



?>