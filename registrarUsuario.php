<?php 
    include_once 'layout.php';
    
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ópticas Vitra</title>
   <?php IncluirCSS();?>
</head>
    <body>
       <?php MostrarMenu();?>
    
    <section class=" d-flex align-items-center justify-content-center min-vh-100">
        <div class="container ">
        <div class="section-title text-center my-2" data-aos="fade-up">
         
                 <h4 class="mb-4 text-center">Ingrese sus Datos</h4>
                </div>
                   <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
                   <div class="col-lg-7 " data-aos="fade-up" data-aos-delay="100">  
                   <form method="POST" id="contactForm" name="contactForm" class="contactForm aling-items-center">
                   <div class="row">    
                    <div class="col-md-6 mb-3 my-4">           
                   <label for="Name" class="form-label">Nombre Completo</label>
                                                <input type="text" class="form-control" name="Name" id="Name"
                                                placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3 my-4">
                                                <label for="Email" class="form-label">Correo Electrónico</label>
                                                <input type="email" class="form-control" name="Email" id="Email"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Password" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" name="Password"
                                                    id="Password" placeholder="" required>
                                            </div>

                                           <div class="col-md-6 mb-3">
                                                <label for="ConfirmPassword" class="form-label">Confirmar Contraseña</label>
                                                <input type="password" class="form-control" name="ConfirmPassword"
                                                    id="ConfirmPassword" placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Phone" class="form-label">Teléfono</label>
                                                <input type="tel" class="form-control" name="Phone" id="Phone"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="Address" class="form-label">Dirección</label>
                                                <input type="text" class="form-control" name="Address" id="Address"
                                                    placeholder="">
                                            </div>

                                            <div class="col-md-12 mb-3 text-center">
                                                <div class="form-group">
                                                    <p>¿Ya tienes cuenta? <a href="iniciarSesion.php">Iniciar sesión</a></p>
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-center my-4">
                                                <button type="submit" class="btn btn-outline-light bg-primary" id="btnRegistrarUsuario" name="btnRegistrarUsuario">Registrarse</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
</body>

</html>
