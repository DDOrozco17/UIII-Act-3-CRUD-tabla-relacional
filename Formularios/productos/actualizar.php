<?php
include_once("../../config/conexion.php");

// Verificar si se recibió un ID válido
if (isset($_REQUEST['id_provedor']) && is_numeric($_REQUEST['id_provedor'])) {
    $id_provedor = $_REQUEST['id_provedor'];

    // Obtener datos del proveedor por ID
    $sql = "SELECT * FROM tbl_proveedor WHERE id_provedor = $id_provedor";
    $resultado = $conexion->query($sql);

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
    } else {
        // Manejar el caso en el que no se encuentren resultados
        echo "Proveedor no encontrado";
        exit;
    }
} else {
    // Manejar el caso en el que no se proporcionó un ID válido
    echo "ID de proveedor no válido";
    exit;
}
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Proveedor</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

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
                        <h5 class="card-title text-center">ACTUALIZAR PROVEEDOR</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <input type="hidden" class="form-control" name="id_provedor" id="id_provedor"
                                value="<?php echo $row['id_provedor'] ?>">

                            <div class="mb-3">
                                <label for="nombre_proveedor" class="form-label">Nombre del Proveedor</label>
                                <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor"
                                    placeholder="Nombre del proveedor" value="<?php echo $row['nombre_provedor'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion"
                                    placeholder="Dirección del proveedor" value="<?php echo $row['direccion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono"
                                    placeholder="Teléfono del proveedor" value="<?php echo $row['telefono'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" name="correo_electronico"
                                    id="correo_electronico" placeholder="Correo electrónico del proveedor"
                                    value="<?php echo $row['correo_electronico'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="producto_principal" class="form-label">Producto Principal</label>
                                <input type="text" class="form-control" name="producto_principal"
                                    id="producto_principal" placeholder="Producto principal que provee"
                                    value="<?php echo $row['producto_principal'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                                <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega"
                                    placeholder="Fecha de entrega de productos"
                                    value="<?php echo $row['fecha_entrega'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="total_productos" class="form-label">Total de Productos</label>
                                <input type="number" class="form-control" name="total_productos" id="total_productos"
                                    placeholder="Cantidad total de productos"
                                    value="<?php echo $row['total_productos'] ?>">
                            </div>
                            <div class="text-center">
                                <!-- Actualizado: Enlace al listado de proveedores -->
                                <a href="../productos/index.php" type="submit"
                                    class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>