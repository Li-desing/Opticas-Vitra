
<?php
 include('layout.php')
 
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

<main class="container py-5">
    <h2 class="text-center mb-4">Datos de Personal</h2>
<div class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
       <th>Nombre</th>
       <th>Número de Teléfono</th>
       <th>Correo Electrónico</th>
       <th>Rol</th>
       <th>Sucursal</th>
       <th>Estado</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <td>Chase Gonzalez Bolaños</td>
          <td>888888</td>
          <td>c@gmail.com</td>
          <td>Administrador de inventario/td>
           <td>Sucursal 1</td>
            <td>
             <a href="editarPersonal.php?id=2" class="btn btn-sm btn-outline-primary">
              <i class="bi bi-pencil-square"></i>
           </a>
        </td>
      </tr>
      
        </tbody>
    </table>
  </div>
</main>
          <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
    </body>
</html>
