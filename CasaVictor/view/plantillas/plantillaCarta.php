<?php  require "../../controller/Controlador/CartaController.php";
mostrarCarta();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <link rel="shortcut icon" href="../images/LogoDef.JPG" />
    <link rel="stylesheet" href="../estilos/index.css">
    <script src="https://kit.fontawesome.com/4344516574.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
    <img class="img-fluid me-3 logoGeneral" src="../images/LogoDef.JPG" heiht="100" width="100" alt="logo">
        <h2 class="fw-bold fs-2">Carta</h2>
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
                    <a class="nav-link active" href="#">Carta</a>
                    <a class="nav-link" href="#">Platos</a>
                    <a class="nav-link" href="#">Reserva</a>
                    <a class="nav-link" href="#">Conócenos</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="mainCarta">
        <div class="container">
            <h2 class="text-uppercase text-center fw-bold text-light p-2">Descubre nuestra carta</h2>
            <hr class="hrCarta">
        </div>
        <div class="row justify-content-around ">
            <!-- una especie de nav, sticky, con cada menu asociado a un boton. Cuando se pulsa aparece un contenedor con el menu (con animación de entrada) -->
            <!-- al pulsar el boton, php genera el contenedor con el menu (se crea en html parametrizado y se pasa por buffer), las clases permitiran que aparezca con una animación -->
            <form class="col col-10 sticky-md-top text-center p-sm-2 p-md-3 ps-md-5 pe-md-5" method="post">
                <input type="submit" class="btn btn-light col-sm-5 col-md-2 m-2" name="MenuCarta"
                    value="Menú Cinco Hojas">
                <input type="submit" class="btn btn-light col-sm-5 col-md-2 m-2" name="MenuCarta" value="Menú Vid">
                <input type="submit" class="btn btn-light col-sm-5 col-md-2 m-2" name="MenuCarta" value="Menú Olivo">
                <input type="submit" class="btn btn-light col-sm-5 col-md-2 m-2" name="MenuCarta" value="Menú Fresal">
            </form>

            <div class="container text-light text-center fw-bold datosCartaV m-4 p-4 col col-10">
                <h1 class="fw-bolder ">Menú Vid</h1>
                <!-- tipo plato -->
                <div class="row justify-content-around">
                    <h3 class="text-center texto-cabecera">Entrantes</h3>

                    <!-- plato -->
                    <div class="row m-3 align-items-center texto-items">
                        <div class="col col-10 col-md-7 ">Entrante 1</div>
                        <div class="col col-md-3 rounded-circle">
                            <img class="img-fluid rounded-circle" src="../images/LogoDef.JPG" height="150" width="150"
                                alt="entrante1">
                        </div>
                    </div>

                    <div class="row m-3 align-items-center texto-items">
                        <div class="col col-10 col-md-7 text-s">Entrante 2</div>
                        <div class="col col-md-3 rounded-circle">
                            <img class="img-fluid rounded-circle" src="../images/LogoDef.JPG" height="150" width="150"
                                alt="entrante1">
                        </div>
                    </div>

                    <div class="row m-3 align-items-center texto-items">
                        <div class="col col-10 col-md-7 ">Entrante 3</div>
                        <div class="col col-md-3 rounded-circle">
                            <img class="img-fluid rounded-circle" src="../images/LogoDef.JPG" height="150" width="150"
                                alt="entrante1">
                        </div>
                    </div>



                </div>
                <div class="row justify-content-around">
                    <h3 class="text-center texto-cabecera">Platos principales</h3>

                    <!-- plato -->
                    <div class="row m-3 align-items-center texto-items">
                        <div class="col col-10 col-md-7 ">Plato 1</div>
                        <div class="col col-md-3 rounded-circle">
                            <img class="img-fluid rounded-circle" src="../images/LogoDef.JPG" height="150" width="150"
                                alt="entrante1">
                        </div>
                    </div>

                    <div class="row m-3 align-items-center texto-items">
                        <div class="col col-10 col-md-7 text-s">Plato 2</div>
                        <div class="col col-md-3 rounded-circle">
                            <img class="img-fluid rounded-circle" src="../images/LogoDef.JPG" height="150" width="150"
                                alt="entrante1">
                        </div>
                    </div>

                    <div class="row m-3 align-items-center texto-items">
                        <div class="col col-10 col-md-7 ">Plato 3</div>
                        <div class="col col-md-3 rounded-circle">
                            <img class="img-fluid rounded-circle" src="../images/LogoDef.JPG" height="150" width="150"
                                alt="entrante1">
                        </div>
                    </div>



                </div>
                <div class="row justify-content-around">
                    <h3 class="text-center texto-cabecera">Postres</h3>

                    <!-- plato -->
                    <div class="row m-3 align-items-center texto-items">
                        <div class="col col-10 col-md-7 ">Postre 1</div>
                        <div class="col col-md-3 rounded-circle">
                            <img class="img-fluid rounded-circle" src="../images/LogoDef.JPG" height="150" width="150"
                                alt="entrante1">
                        </div>
                    </div>

                    <div class="row m-3 align-items-center texto-items">
                        <div class="col col-10 col-md-7 text-s">Postre 2</div>
                        <div class="col col-md-3 rounded-circle">
                            <img class="img-fluid rounded-circle" src="../images/LogoDef.JPG" height="150" width="150"
                                alt="entrante1">
                        </div>
                    </div>

                </div>
            </div>
            <!-- <?= $cartaHtml ?> -->
        </div>
    </main>


    <footer class="text-center text-lg-start text-muted border-top">

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Cinco hojas
                        </h6>
                        <img class="img-fluid me-3 logoGeneral" src="../images/LogoDef.JPG" heiht="150" width="150" alt="logo">
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Páginas
                        </h6>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Carta</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Platos</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Reserva</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Conócenos</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Otros enlaces
                        </h6>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Política de privacidad</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Iniciar Sesión</a>
                        </p>
                    
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                        <p><i class="fas fa-home me-3"></i> Logroño (La Rioja) 26004</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            visaenz99@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> 623 34 45 32</p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-2 mb-5">
                        <a class="alert alert-secondary text-decoration-none" href="http://www.freepik.com">Images by
                            Freepik</a>

                    </div>
                </div>
                <!-- Grid row -->
            </div>

        </section>

    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>