<?php
require_once("../../config/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Producto</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PROVEEDOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">TRANSACCIONES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">REGISTRAR PRODUCTO</h5>
                        <form action="<?php echo base_url; ?>CRUDC/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre_producto" class="form-label">Nombre Producto</label>
                                <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Nombre Producto" required>
                            </div>
                            <div class="mb-3">
                                <label for="categoria_producto" class="form-label">Categoría Producto</label>
                                <input type="text" class="form-control" id="categoria_producto" name="categoria_producto" placeholder="Categoría Producto" required>
                            </div>
                            <div class="mb-3">
                                <label for="precio_unitario" class="form-label">Precio Unitario</label>
                                <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" placeholder="Precio Unitario" required>
                            </div>
                            <div class="mb-3">
                                <label for="cantidad_stock" class="form-label">Cantidad en Stock</label>
                                <input type="text" class="form-control" id="cantidad_stock" name="cantidad_stock" placeholder="Cantidad en Stock" required>
                            </div>
                            <div class="mb-3">
                                <label for="provedor" class="form-label">Proveedor</label>
                                <input type="text" class="form-control" id="provedor" name="provedor" placeholder="Proveedor" required>
                            </div>
                            <div class="mb-3">
                                <label for="fecha_llegada" class="form-label">Fecha de Llegada</label>
                                <input type="date" class="form-control" id="fecha_llegada" name="fecha_llegada" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion_productos" class="form-label">Descripción Productos</label>
                                <textarea class="form-control" id="descripcion_productos" name="descripcion_productos" rows="3" placeholder="Descripción Productos" required></textarea>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/categorias/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>
