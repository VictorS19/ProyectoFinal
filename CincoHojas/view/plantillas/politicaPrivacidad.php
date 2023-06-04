<?php  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacidad</title>
    <link rel="shortcut icon" href="../images/LogoDef.JPG" />
    <link rel="stylesheet" href="../estilos/index.css">
    <script src="https://kit.fontawesome.com/4344516574.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
        <img class="img-fluid me-3 logoGeneral" src="../images/LogoDef.JPG" heiht="100" width="100" alt="logo">
        <h2 class="fw-bold fs-2">Política de Privacidad</h2>
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
                    <a class="nav-link" href="./plantillaConocenos.php">Conócenos</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="fondoVerde p-5">


        <div class="row justify-content-around bg-light rounded">

            <div class="col col-lg-8 p-4">
                

                <p>La presente Política de Privacidad establece los términos en que CincoHojas usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p>   

                <h5 class="text-uppercase  fw-bold  p-4">Información que es recogida</h5>
                <p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre e información de contacto como su dirección de correo electrónico. Así mismo cuando sea necesario podrá ser requerida información específica para procesar alguna reserva.</p>
                <h5 class="text-uppercase  fw-bold  p-4">Uso de la información recogida</h5>
                <p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de reservas en caso que aplique, y mejorar nuestros productos y servicios.</p>

                
               
                

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
                    <a href="./politicaPrivacidad.php" class="text-reset text-decoration-none">Política de privacidad</a>
                </p>
                <?php 
                    if(isset($_SESSION['datosSesion'])){
                    
                    echo "
                    <p>
                    <a href='./plantillaLogin.php' class='text-reset text-decoration-none'>".$_SESSION['datosSesion'][2].": Cerrar Sesión</a>
                    </p>
                    ";
                    }
                
                ?>
                <p>
                    <a href="http://www.freepik.com" class="text-reset text-decoration-none">Licencia de las imágenes</a>
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
            

        </div>
       
    </div>

</section>

</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>