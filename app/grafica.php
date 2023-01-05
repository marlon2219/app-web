<?php
    session_start();
    if(!isset($_SESSION['nombre'])){
        header('Location: index.php');
    } 
    $conexion = mysqli_connect("localhost","root","","paginaweb");
    $consulta = "SELECT  usuario.usuario,fotos.idUsuario, COUNT(*) AS totalfotos FROM fotos INNER JOIN usuario ON fotos.idUsuario = usuario.idUsuario GROUP BY fotos.idUsuario";
    $resultado = mysqli_query($conexion,$consulta);


?>




<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf";
        crossorigin="anonymous">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: '<h2 style="color:#f0d500; font-family: Sans-serif;">PORCENTAJE DE FOTOS SUBIDAS POR CADA USUARIO <br> (en referencia al total de las fotos)</h2> '
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Total De Fotos',
            data: [
                //aqui se conecta con la base de datos -> Creamos el array para recorrer la tabla

                <?php
                    while($fila = mysqli_fetch_array($resultado)){

                        echo "['".$fila["usuario"]."', ".$fila["totalfotos"]."],";

                    }
                
                ?>

                
            ]
        }]
    });
});
		</script>
	</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="vistaUsuario.php">HEADSHOT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="vistaUsuario.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <buton type="button" class="nav-link active" data-bs-toggle="modal" data-bs-target="#modalbusqueda" >Buscar</button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="misfotos.php?id=<?php echo $_SESSION['id']?>" target="miContenedor">Mis Fotos</a>
                        </li><!-- comment -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="editar.php?id=<?php echo $_SESSION['id'] ?>" target="miContenedor">Editar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="grafica.php?id=<?php echo $_SESSION['id'] ?>" target="miContenedor">Grafico</a>
                        </li>
                        </ul>  
                       
                       

                        <!--modal para busqueda-->
                        <div class="modal fade" id="modalbusqueda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form class="d-flex" action="buscar.php" method="post">
                                                        <input class="form-control me-2" name="busqueda"  placeholder="Search" aria-label="Search">
                                                        <button class="btn btn-outline-success" name="enviarbusqueda" type="submit">Search</button>
                                                        
                                                    </form>
                                                  

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                  
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION['nombre'] ?>
                        </button>
                        <div class="dropdown-menu" >
                            <a class="dropdown-item" href="#"> <i class="fas fa-user" ></i></a>
                            <a class="dropdown-item" href="#"><?php echo $_SESSION['nombre'] ?></a></li>
                            <a class="dropdown-item" href="#"><?php echo $_SESSION['correo'] ?></a></li>
                            <div class="dropdown-divider"></div>
                            <form class="dropdown-item" method="POST" action="Validar"> 
                                <a href="cerrar.php"  class="btn btn-danger center-block" >Cerra sesión</a>
                            </form>
                        </div>
                    </div>
                </div>
        </nav>
        <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
crossorigin="anonymous"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
crossorigin="anonymous"></script>


        <div style="width:100%; height:5rem; border-top: 1px solid #FFFFFF;" class="col-12"><h3 class="card-title text-white bg-dark  text-center pb-4 pt-3">TODAS LAS FOTOS</h3>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="height: 400px">

</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
crossorigin="anonymous"></script>
	</body>
</html>
