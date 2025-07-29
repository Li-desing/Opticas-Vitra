<?php
 include('layout.php'); 
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
<!-- Appointment Section -->
    <section class="appointment section">

      <!-- Section Title -->
      <div class="container section-title text-center my-5" data-aos="fade-up">
        <h2>Modificar Cita</h2>
        
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="forms/editarCita.php" method="post" role="form" class="php-email-form">
<!--estese llama desde la bd -->
        <input type="hidden" name="citaId" value="123">  
        <div class="row">
            <div class="col-md-4 form-group">
                <label class="form-label">Nombre Completo</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Chase Gonzalez Matarrita" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <label class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="c@gmail.com" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <label class="form-label">Número de Teléfono</label>
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="888888" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
                <label  class="form-label">Fecha y hora</label>
              <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Fecha de Cita" required="2025-07-28T14:00">
            </div>
            <div class="col-md-4 form-group mt-3">
                <label for="date" class="form-label">Seleccione la sucursal</label>
              <select name="department" id="department" class="form-select" required="">
                <option value="">Seleccionar</option>
                <option value="Department 1" selected>Sucursal 1</option>
                <option value="Department 2">Sucursal 2</option>
                <option value="Department 3">Sucursal 3</option>
              </select>
            </div>
    
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje (Opcional)"></textarea>
          </div>
          <div class="mt-3">
            <div class="loading">Cargando</div>
            <div class="error-message"></div>
            <div class="sent-message">La cita ha sido modificada correctamente.</div>
            <div class="text-center my-2">
            <button class="btn btn-outline-light bg-primary" type="submit">Guardar Cambios</button></div>
          </div>
          </div>
        </form>
 </div>
</section>
</main>
     <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
</body>
</html>
   