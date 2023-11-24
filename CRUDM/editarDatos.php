<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id_transaccion = $_POST['id_transaccion'];
    $id_proveedor = $_POST['id_proveedor'];
    $id_producto = $_POST['id_producto'];
    $cantidad_comprada = $_POST['cantidad_comprada'];
    $precio_total = $_POST['precio_total'];
    $fecha_transaccion = $_POST['fecha_transaccion'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE tbl_transacciones SET id_proveedor = '$id_proveedor', id_producto = '$id_producto', cantidad_comprada = '$cantidad_comprada', precio_total = '$precio_total', fecha_transaccion = '$fecha_transaccion' WHERE id_transaccion = $id_transaccion";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/marcas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
?>