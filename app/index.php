<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PAGINA</title>
    <style>
      body{
        background-color: black;
      }
      main{
        background: linear-gradient(to right, #43c6ac, #191654);
      }
      .nav{
        background: linear-gradient(to right, #43c6ac, #191654);
        display: flex;
            justify-content:space-around;
            width: 100%;

         
      }
      .nav a:hover{
        background: rgba(255, 255, 255, 0.96);
        
      }
      .nav a{
        padding: 15px ;
        width: 25%;
        text-align : center;
        font-size : 20px;
        
       
      }
      .nav-link{
        color: white;
      }
      .texto{
        
      display: flex;
      align-items: center;
      justify-content: center;
      

      }
      p{
        color:white;
      }
     
     
    </style>
</head>
<body>
    <main>
      
      <nav class="nav">
        <a class="nav-link active" aria-current="page" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link">Disabled</a>
      </nav>
      
      
      <div  class="container-fluid mt-5  center-block " >
        <div class="row  justify-content-center">
            <div class="card" style="height:28rem; width: 20rem;background:#43c6ac; ; border-color: #EEF2FF; border-width: 2px ; margin-bottom: 80px">
                <img style="width: 150px; margin: 20px auto" src="imagenes/logo2.png" class="card-img-top" alt="logo"> 
                <div class="card-body">
                    <form method="post" action="entrar.php">
                        <div class="mb-3 form-group">
                            <label >Usuario</label>
                            <input type="text" class="form-control"  name="txtusuario">
                           
                        </div>
                        <div class="mb-3 form-group">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="txtpassword">
                        </div>
                        <div class="mb-3 form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Permanecer logeado</label>
                        </div>
                        <input type="submit" class="btn btn-primary" name="accion" value="Ingresar">
                    </form>
                </div>
            </div>

            
            <div class="m-5  " style="width: 35rem; ">
              
             
              <div class="  text-center">
                <p>
                  <img style="width: 550px" src="imagenes/picture.png"><br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
              </div>
              <div class="d-grid gap-3 col-6 mx-auto">
                <a class="btn btn-primary" href="formulario.php">REGISTRATE</a>
               
    </div>
    </main>

    <footer>
        <div style="background-color: #000000; border-top: 5px solid white;  " class="container-fluid  ">
          <div class="container ">
          
            <div class="row mx-auto  justify-content-center mt-3 ">
              <div class="col-12 col-md-5">
              <a href="#"><img style="width: 150px; " src="imagenes/face.png"  alt="logo">  </a>
              <a href="#"><img style="width: 150px; " src="imagenes/google.png"  alt="logo">  </a>
              <a href="#"><img style="width: 150px;  " src="imagenes/insta.png"  alt="logo">  </a>
              <br>
                <div class="text-center">
                <p>Advertise  |  About  |  Press  |  Contact  </p>
                </div>
              </div>
            </div>
          
          </div> 
        </div>
    </footer>

      

    <script src="js/bootstrap.min.js"></script>
</body>
</html>