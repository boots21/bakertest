<?php
    
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        

        $mailheader = "From:".$name."<".$email.">\r\n";
s
        $recipient = "email";
        

        mail($recipient, $subject, $message, $mailheader) or die("Error!");

        echo'
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SafeCam - CCTV Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="display-5 m-0 text-primary">Safe<span class="text-secondary">Cam</span></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link">Inicio</a>
                <a href="about.html" class="nav-item nav-link">Conócenos</a>
                <!--<a href="service.html" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div> -->
                <a href="contact.html" class="nav-item nav-link active">Contáctenos</a>
                <a href="tel:+123456789" class="nav-item nav-link nav-contact bg-secondary text-white px-5 ms-lg-5"><i class="bi bi-telephone-outbound me-2"></i>+123 456 789</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Contacto</h1>
                <!-- <a href="" class="h4 text-white">Inicio</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Conócenos</a>-->
            



            </div>
        </div>
    </div>
    <!-- Hero End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contáctanos</h5>
            <h1 class="display-5 mb-0">Pasos Para Tener un Hogar Seguro</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="text-center pb-4">
                <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">Si estás interesado en tener un hogar más seguro, contáctanos. Podemos programar una visita.</p>
                    <h4 class="text-truncate">Telefono o Email</h4>
                    <i>Primer Paso</i>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">Durante la visita, trabajamos juntos para diseñar un sistema personalizado que satisfaga sus necesidades.
                    </p>
                    <h4 class="text-truncate">Plan de Acción</h4>
                    <i>Segundo Paso</i>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">Elija el día que mejor se adapte a su horario, las instalaciones se realizan en un día en promedio.
                    </p>
                    <h4 class="text-truncate">Fecha de Instalación</h4>
                    <i>Tercer Paso</i>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">Una vez que el sistema esté funcionando, le explicamos cómo puede acceder a la transmisión en vivo y a los eventos grabados.
                    </p>
                    <h4 class="text-truncate">Usando el Sistema</h4>
                    <i>Ultimo Paso</i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

     <!-- Contact Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Formulario de Contacto</h5>
                <h1 class="display-5 mb-0">Thank you for contacting me. I will get back to you as soon as possible!</h1>
            </div>
            
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Enlaces Rápidos</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Quiénes Somos</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Nuestros Servicios</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Nuestros Productos</a>
                        <!--<a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>-->
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contáctenos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Enlaces Populares</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="https://es.wikipedia.org/wiki/Circuito_cerrado_de_televisi%C3%B3n"><i class="bi bi-arrow-right text-primary me-2"></i>¿Qué es un sistema CCTV?</a>
                        <a class="text-light mb-2" href="https://advanceinfraestructuras.es/blog/camara-ip-camara-cctv"><i class="bi bi-arrow-right text-primary me-2"></i>¿Cámara analógica o IP?</a>
                        <a class="text-light mb-2" href="https://hikvision.lat/software/software-hik-connect.html"><i class="bi bi-arrow-right text-primary me-2"></i>Aplicación Móvil CCTV</a>
                        <a class="text-light mb-2" href="https://integrarcctv.com/cable-coaxial-siames-o-cable-utp/"><i class="bi bi-arrow-right text-primary me-2"></i>¿Cable coaxial siamés o Cable UTP?</a>
                        <a class="text-light" href="https://www.syscom.mx/principal/listadopormarca/hikvision#:~:text=Hikvision%20es%20el%20principal%20proveedor,son%20ingenieros%20en%20I%2BD%20."><i class="bi bi-arrow-right text-primary me-2"></i>¿Quién es Hikvision?</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Contacta con Nosotros</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Nuevo Leon</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>safehomegarcia@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>52-81#######</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Síganos</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-whatsapp fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-youtube fw-normal"></i></a>
                        <!--<a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>-->
                    </div>
                </div>
                <!--<div class="col-12">
                    <form class="mx-auto" style="max-width: 600px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </form>
                </div>-->
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-light py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">SafeHomeGarcia.com</a>. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Diseñada por <a class="text-white border-bottom" href="https://htmlcodex.com">Paginas Unicas</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
        
        ';




?>

     
