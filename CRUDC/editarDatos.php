<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id_producto = $_POST['id_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $categoria_producto = $_POST['categoria_producto'];
    $precio_unitario = $_POST['precio_unitario'];
    $cantidad_stock = $_POST['cantidad_stock'];
    $provedor = $_POST['provedor'];
    $fecha_llegada = $_POST['fecha_llegada'];
    $descripcion_productos = $_POST['descripcion_productos'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE tbl_productos SET nombre_producto = '$nombre_producto', categoria_producto = '$categoria_producto', precio_unitario = '$precio_unitario', cantidad_stock = '$cantidad_stock', provedor = '$provedor', fecha_llegada = '$fecha_llegada', descripcion_productos = '$descripcion_productos' WHERE id_producto = $id_producto";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
?>
