<?php

function MostrarMenu(){
    echo '
            <nav class="navbar navbar-expand-lg navbar-dark bg-blue-light custom-navbar">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Ópticas Vitra</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">Sobre Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contacto</a></li>
                            <li class="nav-item"><a class="nav-link" href="anteojos.php">Anteojos</a></li>
                            <li class="nav-item"><a class="nav-link" href="iniciarSesion.php">Iniciar Sesión</a></li>
                            <li class="nav-item"><a class="nav-link" href="inventario.php">Inventario</a></li>
                            <li class="nav-item"><a class="nav-link" href="facturacion.php">Facturación</a></li>
                            <li class="nav-item"><a class="nav-link" href="reportes.php">Reportes</a></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Citas</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="appointmentForm.php">Agendar Cita</a></li>
                                    <li><a class="dropdown-item" href="historialMedico.php">Historial Médico</a></li>
                                </ul>
                                </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Personal</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                 <li><a class="dropdown-item" href="registrarPersonal.php">Registrar Personal</a></li>
                                 <li><a class="dropdown-item" href="personal.php">Personal</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Perfil</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="editarPerfil.php">Editar Perfil</a></li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>';
}
function MostrarFooter(){
	echo '<footer class="footer">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 text-center">

                    <p class="copyright">
                        <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> Todos los derechos reservados <a href="" target="_blank"></a>
                        <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>';
}
function IncluirCSS() {
    echo '
    <!-- CSS Globales -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">

     
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
   
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    ';
}

function IncluirScripts() {
    echo '
    <!-- JS Globales -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    ';
}

?>