<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinco Hojas</title>
    <link rel="shortcut icon" href="view/images/LogoDef.JPG"/>
    <link rel="stylesheet" href="./view/estilos/index.css">
    <script src="https://kit.fontawesome.com/4344516574.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
        <img class="img-fluid me-3 logoGeneral" src="./view/images/LogoDef.JPG" heiht="100" width="100" alt="logo">
        <h2 class="fw-bold fs-2">Restaurante cinco hojas</h2>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light fs-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    <a class="nav-link" href="./view/plantillas/plantillaCarta.php">Carta</a>
                    <a class="nav-link" href="./view/plantillas/plantillaPlatos.php">Platos</a>
                    <a class="nav-link" href="./view/plantillas/plantillaReserva.php">Reserva</a>
                    <a class="nav-link" href="./view/plantillas/plantillaConocenos.php">Conócenos</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <!-- hero -->
        <img class="img-fluid w-100" src="./view/images/heroS.jpg" alt="hero">

        <!-- tarjetas de enlaces rapidos -->
        <div class="row d-flex justify-content-center">
            <a href="./view/plantillas/plantillaCarta.php" class=" rounded text-center m-4 p-3 bg-primary col-9 col-md-3 tarjCarta">
                <span class="badge bg-light text-black-50 fs-5">Carta</span>

            </a>
            <a href="./view/plantillas/plantillaPlatos.php" class=" rounded text-center m-4 p-3 bg-primary col-9 col-md-3 tarjPlatos">
                <span class="badge bg-light text-black-50 fs-5">Platos</span>

            </a>
            <a href="./view/plantillas/plantillaReserva.php" class=" rounded text-center m-4 p-3 bg-primary col-9 col-md-3 tarjReserva">
                <span class="badge bg-light text-black-50 fs-5">Reserva</span>

            </a>
        </div>
    </main>

    <footer class="text-center text-lg-start text-muted border-top">

        
        <section class="">
            <div class="container text-center text-md-start mt-5">
               
                <div class="row mt-3">
                   
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        
                        <h6 class="text-uppercase fw-bold mb-4">
                            Cinco hojas
                        </h6>
                        <img class="img-fluid me-3 logoGeneral" src="./view/images/LogoDef.JPG" heiht="150" width="150" alt="logo">
                    </div>
                    

                   
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        
                        <h6 class="text-uppercase fw-bold mb-4">
                            Páginas
                        </h6>
                        <p>
                            <a href="./view/plantillas/plantillaCarta.php" class="text-reset text-decoration-none">Carta</a>
                        </p>
                        <p>
                            <a href="./view/plantillas/plantillaPlatos.php" class="text-reset text-decoration-none">Platos</a>
                        </p>
                        <p>
                            <a href="./view/plantillas/plantillaReserva.php" class="text-reset text-decoration-none">Reserva</a>
                        </p>
                        <p>
                            <a href="./view/plantillas/plantillaConocenos.php" class="text-reset text-decoration-none">Conócenos</a>
                        </p>
                    </div>
                    

                    
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        
                        <h6 class="text-uppercase fw-bold mb-4">
                            Otros enlaces
                        </h6>
                        <p>
                            <a href="./view/plantillas/politicaPrivacidad.php" class="text-reset text-decoration-none">Política de privacidad</a>
                        </p>

                        <?php 
                         if(isset($_SESSION['datosSesion'])){
                            
                            echo "
                            <p>
                            <a href='./view/plantillas/plantillaLogin.php' class='text-reset text-decoration-none'>".$_SESSION['datosSesion'][2].": Cerrar Sesión</a>
                            </p>
                            ";
                          }else{
                            echo "
                            <p>
                            <a href='./view/plantillas/plantillaLogin.php' class='text-reset text-decoration-none'>Iniciar Sesión</a>
                            </p>
                            ";
                          }
                      
                        ?>
                        <p>
                            <a href="http://www.freepik.com" class="text-reset text-decoration-none">Licencia de las imágenes</a>
                        </p>
                        <?php 
                         if(isset($_SESSION['datosSesion']) && $_SESSION['datosSesion'][4] == 1){
                            
                            echo "
                            <p>
                            <a href='./view/plantillas/plantillaGestion.php' class='text-reset text-decoration-none'>Gestionar Reservas</a>
                            </p>
                            ";
                         
                         }
                        ?>
                    </div>
                   

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                       
                        <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                        <p><i class="fas fa-home me-3"></i> Logroño (La Rioja) 26004</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            visaenz99@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> 623 34 45 32</p>
                    </div>
                   
                </div>
            
            </div>

        </section>

    </footer>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>