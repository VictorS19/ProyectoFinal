<?php  require "../../controller/Controlador/CartaController.php";
mostrarCarta();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos</title>
    <link rel="shortcut icon" href="../images/LogoDef.JPG" />
    <link rel="stylesheet" href="../estilos/index.css">
    <script src="https://kit.fontawesome.com/4344516574.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
        <img class="img-fluid me-3 logoGeneral" src="../images/LogoDef.JPG" heiht="100" width="100" alt="logo">
        <h2 class="fw-bold fs-2">Conócenos</h2>
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
                    <a class="nav-link " href="./plantillaReserva.php">Reserva</a>
                    <a class="nav-link active" href="#">Conócenos</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="fondoVerde p-5">


        <div class="row justify-content-around bg-light rounded">

            <div class="col col-lg-8 ">
                <h2 class="text-uppercase  fw-bold  p-4">Datos de Contacto</h2>
                <hr class="hrCarta">

                <p><span class="fw-bold">Dirección: </span> Logroño (La Rioja) 26004</p>
                <p><span class="fw-bold">Teléfono: </span> 623 34 45 32</p>
                <p><span class="fw-bold">Correo Electrónico Para Consultas: </span> info@cincohojas.com</p>
                <p><span class="fw-bold">Correo Electrónico Comercial: </span> comercial@cincohojas.com</p>



                <h2 class="text-uppercase  fw-bold  p-2">Ubicación</h2>
                <hr class="hrCarta">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218.75643996359074!2d-2.4503741970452433!3d42.465522274053804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5aab4807b0e213%3A0xc648f043158bed5a!2sAv.%20Portugal%2C%2032%2C%2026001%20Logro%C3%B1o%2C%20La%20Rioja!5e0!3m2!1ses!2ses!4v1685288066518!5m2!1ses!2ses"
                    style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




                <h2 class="text-uppercase  fw-bold  p-2">Acerca del Restaurante</h2>
                <hr class="hrCarta">
                <p>Cinco hojas es un restaurante en el que pretendemos darle valor a la comida de nuestra zona, en
                    nuestros menús degustación se puede disfrutar de las versiones mas atrevidas de los platos mas
                    conocidos de La Rioja y gran parte de España. Además llevamos a cabo un proyecto de sostenibilidad
                    con el medio ambiente, plasmado también en el nombre de los menús que ofrecemos. Esperemos que
                    disfrutes, el equipo de Cinco Hojas</p>

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