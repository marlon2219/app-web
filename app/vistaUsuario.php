<?php

session_start();
if(!isset($_SESSION['nombre'])){
    header('Location: index.php');
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf";
crossorigin="anonymous">
    <title>PAGINA</title>
    <style>
      body{
       
      }
      .nav{
        background-color: #FF5959;
         
      }
      .nav-link{
        color: white;
      }
      .texto{
        
      display: flex;
      align-items: center;
      justify-content: center;
      

      }
      .col-6  img{
        max-width: 368px;
          max-height: 200px;
          
      }
     
     
    </style>
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
      
        <div style="width:100%; height:5rem; border-top: 1px solid #FFFFFF;" class="col-12"><h3 class="card-title text-white bg-dark  text-center pb-4 pt-3">TODAS LAS FOTOS</h3>
    <main>
        <div class="container-fluid ">
            <div class="row mx-auto">

            <?php
    //require 'conexion2.php';
    $id = $_SESSION['id'];
    $conexion2 = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion2,"paginaweb");
    $resultado= mysqli_query($conexion2,"SELECT * FROM fotos ; ");
    while ($fila = mysqli_fetch_array($resultado)){
?>
     <div class="col-12 col-md-6 col-lg-4 mt-5 " >
                  <div class="card  mx-auto" style="width: 23rem;">
                        <img src="<?php echo $fila['foto']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $fila['nombre']?></h5>
                          <p class="card-text"><?php echo $fila['descripcion']?></p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                  </div>   
                </div>
    <?php } ?>
               
            </div>       
        </div>
    </main>

      



   
  


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
</body>
</html>