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

 <section class="container my-5 ">
        <div class="d-flex justify-content-between align-items-center mb-4">
       <h2>Inventario de Productos</h2>
       <a href="registrarProducto.php" class="btn btn-primary">Agregar Producto</a>
</div>

<!--filtro-->
<div class="mb-4">
    <input type="text" id="filtroProducto" class="form-control" placeholder="Buscar producto..">
</div>

<div class="row" id="listaProductos">

    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>0</strong></p>
<div class="progress">
    <div class="progress-bar stock-bajo stock-0" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                        <button class="btn btn-editar btn-sm me-2">Editar</button>
                        <button class="btn btn-eliminar btn-sm">Eliminar</button>
                     </div>
                </div>
            </div>
        </div>
    

    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>25</strong></p>
<div class="progress">
    <div class="progress-bar stock-bajo stock-20" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <button class="btn btn-editar btn-sm me-2">Editar</button>
                        <button class="btn btn-eliminar btn-sm">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>18</strong></p>
<div class="progress">
    <div class="progress-bar stock-bajo stock-18" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <button class="btn btn-editar btn-sm me-2">Editar</button>
                        <button class="btn btn-eliminar btn-sm">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>12</strong></p>
<div class="progress">
    <div class="progress-bar stock-bajo stock-18" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <button class="btn btn-editar btn-sm me-2">Editar</button>
                        <button class="btn btn-eliminar btn-sm">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>80</strong></p>
<div class="progress">
    <div class="progress-bar stock-alto stock-80" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <button class="btn btn-editar btn-sm me-2">Editar</button>
                        <button class="btn btn-eliminar btn-sm">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>50</strong></p>
<div class="progress">
    <div class="progress-bar stock-medio stock-50" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <button class="btn btn-editar btn-sm me-2">Editar</button>
                        <button class="btn btn-eliminar btn-sm">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>50</strong></p>
<div class="progress">
    <div class="progress-bar stock-medio stock-50" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <button class="btn btn-editar btn-sm me-2">Editar</button>
                        <button class="btn btn-eliminar btn-sm">Eliminar</button>
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