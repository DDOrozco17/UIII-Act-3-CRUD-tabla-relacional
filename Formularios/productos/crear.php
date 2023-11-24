<?php
include_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Proveedor</title>
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
                        <h5 class="card-title text-center">REGISTRAR PROVEEDOR</h5>
                        <form action="../../CRUDP/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre_proveedor" class="form-label">Nombre del Proveedor</label>
                                <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor"
                                    placeholder="Nombre del proveedor" required>
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion"
                                    placeholder="Dirección del proveedor" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono"
                                    placeholder="Teléfono del proveedor" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" name="correo_electronico"
                                    id="correo_electronico" placeholder="Correo electrónico del proveedor" required>
                            </div>
                            <div class="mb-3">
                                <label for="producto_principal" class="form-label">Producto Principal</label>
                                <input type="text" class="form-control" name="producto_principal"
                                    id="producto_principal" placeholder="Producto principal que provee" required>
                            </div>
                            <div class="mb-3">
                                <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                                <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega"
                                    placeholder="Fecha de entrega de productos" required>
                            </div>
                            <div class="mb-3">
                                <label for="total_productos" class="form-label">Total de Productos</label>
                                <input type="number" class="form-control" name="total_productos" id="total_productos"
                                    placeholder="Cantidad total de productos" required>
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit"
                                    class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>