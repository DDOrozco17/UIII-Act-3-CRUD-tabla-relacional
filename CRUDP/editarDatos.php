<?php
include_once("../config/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id_proveedor = $_POST['id_proveedor'];
    $nombre_proveedor = $_POST['nombre_proveedor'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo_electronico = $_POST['correo_electronico'];
    $producto_principal = $_POST['producto_principal'];
    $fecha_entrega = $_POST['fecha_entrega'];
    $total_productos = $_POST['total_productos'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE tbl_proveedor SET 
                nombre_provedor = '$nombre_proveedor',
                direccion = '$direccion',
                telefono = '$telefono',
                correo_electronico = '$correo_electronico',
                producto_principal = '$producto_principal',
                fecha_entrega = '$fecha_entrega',
                total_productos = '$total_productos'
                WHERE id_provedor = $id_proveedor";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("Location: ../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
} else {
    // Redireccionar a alguna página si la solicitud no es POST
    header("Location: ../Formularios/productos/index.php");
    exit();
}

mysqli_close($conexion);
?>
