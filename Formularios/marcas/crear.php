<?php
require_once("../../config/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Transacción</title>
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
                            <a class="nav-link"
                                href="<?php echo base_url; ?>Formularios/productos/index.php">PROVEEDOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo base_url; ?>Formularios/categorias/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo base_url; ?>Formularios/marcas/index.php">TRANSACCIONES</a>
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
                        <h5 class="card-title text-center">REGISTRAR TRANSACCIÓN</h5>
                        <form action="<?php echo base_url; ?>CRUDM/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="id_proveedor" class="form-label">ID Proveedor</label>
                                <input type="number" class="form-control" id="id_proveedor" name="id_proveedor"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="id_producto" class="form-label">ID Producto</label>
                                <input type="number" class="form-control" id="id_producto" name="id_producto" required>
                            </div>
                            <div class="mb-3">
                                <label for="cantidad_comprada" class="form-label">Cantidad Comprada</label>
                                <input type="number" class="form-control" id="cantidad_comprada"
                                    name="cantidad_comprada" required>
                            </div>
                            <div class="mb-3">
                                <label for="precio_total" class="form-label">Precio Total</label>
                                <input type="text" class="form-control" id="precio_total" name="precio_total" required>
                            </div>
                            <div class="mb-3">
                                <label for="fecha_transaccion" class="form-label">Fecha Transacción</label>
                                <input type="date" class="form-control" id="fecha_transaccion" name="fecha_transaccion"
                                    required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/marcas/index.php" type="submit"
                                    class="btn btn-outline-secondary">Cancelar</a>
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