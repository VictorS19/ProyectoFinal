<?php  require "../../controller/Controlador/CartaController.php";
mostrarCarta();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="shortcut icon" href="../images/LogoDef.JPG" />
    <link rel="stylesheet" href="../estilos/index.css">
    <script src="https://kit.fontawesome.com/4344516574.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
        <img class="img-fluid me-3 logoGeneral" src="../images/LogoDef.JPG" heiht="100" width="100" alt="logo">
        <h2 class="fw-bold fs-2">Reserva</h2>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light fs-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link " aria-current="page" href="../../index.php">Inicio</a>
                    <a class="nav-link " href="./plantillaCarta.php">Carta</a>
                    <a class="nav-link " href="./plantillaPlatos.php">Platos</a>
                    <a class="nav-link active" href="#">Reserva</a>
                    <a class="nav-link" href="./plantillaConocenos.php">Conócenos</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="mainCarta">
        <div class="container">
            <h2 class="text-uppercase text-center fw-bold text-light p-2">Reserva una mesa en Cinco Hojas</h2>
            <hr class="hrCarta">
        </div>
        <div class="row justify-content-around ">


            <div
                class="row justify-content-around text-light text-center fw-bold fondoVerde rounded m-4 p-4 col col-10">

                <form class="col col-9 col-md-3 text-center p-3" method="post">
                    <label for="fechaReserva"  class="form-label">Fecha de la reserva</label>
                    <input type="date" min="2023-05-29" value="2023-05-29" class="form-control text-center" name="fechaReserva">

                    <label for="numComensales" class="form-label">Número de comensales</label>
                    <input type="number" class="form-control text-center" name="numComensales" value="1" max="6"
                        min="1">

                    <input type="submit" class="btn btn-light m-3" name="FechaOk" value="Elegir hora">
                </form>

                <form class="col col-9 col-md-3 text-center p-3 " method="post">
                    <label class="form-label">Horas disponibles</label>
                    <select name="horaReserva" class="form-select form-select-lg text-center">

                        <option value="ko" selected>Elige la hora</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="21:00">21:00</option>
                        <option value="22:00">22:00</option>
                    </select>



                    <input type="submit" class="btn btn-light m-3" name="ReservaOk" value="Reservar">
                </form>


            </div>

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
                <img class="img-fluid me-3 logoGeneral" src="../images/LogoDef.JPG" heiht="150" width="150" alt="logo">
            </div>
            

           
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
               
                <h6 class="text-uppercase fw-bold mb-4">
                    Páginas
                </h6>
                <p>
                    <a href="./plantillaCarta.php" class="text-reset text-decoration-none">Carta</a>
                </p>
                <p>
                    <a href="./plantillaPlatos.php" class="text-reset text-decoration-none">Platos</a>
                </p>
                <p>
                    <a href="./plantillaReserva.php" class="text-reset text-decoration-none">Reserva</a>
                </p>
                <p>
                    <a href="./plantillaConocenos.php" class="text-reset text-decoration-none">Conócenos</a>
                </p>
            </div>
            

            
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
               
                <h6 class="text-uppercase fw-bold mb-4">
                    Otros enlaces
                </h6>
                <p>
                    <a href="#!" class="text-reset text-decoration-none">Política de privacidad</a>
                </p>
                <p>
                    <a href="./plantillaLogin.php" class="text-reset text-decoration-none">Iniciar Sesión</a>
                </p>
            
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
            
            <div class="col-md-2 mb-5">
                <a class="alert alert-secondary text-decoration-none" href="http://www.freepik.com">Images by
                    Freepik</a>

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