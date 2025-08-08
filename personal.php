
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
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="text-center mb-4">Datos de Personal</h2>
     <a href="registrarPersonal.php" class="btn btn-primary ">Agregar Personal</a>
</div>

<div class="d-flex justify-content-center">
<form class="row g-3 align-items-end mb-4">

<div class="col-md-6">
  <label for="cedulaInput" class="form-label">Filtrar por cédula</label>
   <input type="text" id="cedulaInput" class="form-control" placeholder="25259592">   
</div>

    <div class="col-md-6">
        <label for="sucursalSelect" class="form-label">Sucursales</label>
        <select id="sucursalSelect" class="form-select">
        <option value="">Todas las Sucursales</option>
        <option value="Sucursal 1">Sucursal 1</option>
        <option value="Sucursal 2">Sucursal 2</option>
        <option value="Sucursal 3">Sucursal 3</option>
        </select>
</div>
</form>
</div>

      <div class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
       <th>Cédula</th>
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
          <td> 62525251</td>
          <td>Chase Gonzalez Bolaños</td>
          <td>888888</td>
          <td>c@gmail.com</td>
          <td>Administrador de inventario</td>
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
